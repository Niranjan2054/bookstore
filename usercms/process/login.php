<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/bookstore/config/init.php';
debugger($_POST);
$data = array();
if (isset($_POST) && !empty($_POST)) {
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		$data['username'] = $_POST['username'];
		if ($data['username']) {
			if (isset($_POST['password']) && !empty($_POST['password'])) {
				$user = new user();
				$user_info= $user->getUserByUsername($data['username']);
				// debugger($user_info,true);
				$data['password']=sha1(($user_info[0]->email).$_POST['password']);
				// debugger($data,true);
				if (isset($user_info[0]->email) && !empty($user_info[0]->email)) {
					if ($user_info[0]->password ==$data['password']) {
						// debugger($user_info,true);	
						if ($user_info[0]->role =="Client") {
							if ($user_info[0]->status == "Active") {
								$_SESSION['user_id'] = $user_info[0]->id;
								$_SESSION['user_name'] = $user_info[0]->username;
								$_SESSION['email'] = $user_info[0]->email;
								$_SESSION['role'] = $user_info[0]->role;
								$_SESSION['status'] = $user_info[0]->status;
								$token = setToken(100);
								$_SESSION['token'] = $token;
								if (isset($_POST['remember']) && !empty($_POST['remember'])){
									setcookie('_auth_user',$token,(time()+864000),'/');	
								}
								$args = array(
										'session_token'=>$_SESSION['token'],
										'last_login' =>date('Y-m-d h:i:s'),
										'last_ip'=>$_SERVER['REMOTE_ADDR']
								);	
								$user->updateUser($args,$user_info[0]->id);
								debugger($_SESSION);
								setFlash('../index.php','success','You are successfully logged in. Welcome to the dashboard.');
								
							}else{
								setFlash('../','error','This account is not active. Do contact Adminstration.');
							}
						}else{
							setFlash('../','error','You are not allowed to logged in Here.');
						}

					}else{
						setFlash('../','error','Password doesnot matched.');
					}
				}
				setFlash('../','error','Email Doesnot Matched.');
			}else{
				setFlash('../','error','Password Required.');
			}
		}else{
			setFlash('../','error','Invalid Username. Username must be Email Type.');
		}
	}else{
		setFlash('../','error','Username Required');
	}
}else{
	setFlash('../','error','Unauthorized Access');
}