<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/bookstore/config/init.php';
$data = array();
// debugger($_POST,true);
if (isset($_POST) && !empty($_POST)) {
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		$data['email'] = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
		if ($data['email']) {
			if (isset($_POST['password']) && !empty($_POST['password'])) {
				$user = new user();
							
				$data = array(
					'name' => sanitize($_POST['name']),
					'username' => sanitize($_POST['username']),
					'email' => filter_var($_POST['email'],FILTER_VALIDATE_EMAIL),
					'password' => sha1($_POST['email'].$_POST['password']),
					'address' => $_POST['address_city'].",".$_POST['address_country'],
					'role' => 'Client',
				);
				$users = $user->addUser($data);
				if ($users) {
					// echo "Success";
					// exit();
					setFlash('../','success','User added Successfully'); 
				}else{
					// echo "failed";
					// exit();
					setFlash('../','error','Error While Adding To Database');
				}
			}else{
				setFlash('../','error','Password Required.');
			}
		}else{
			setFlash('../','error','Invalid Email. Email not of Email Type.');
		}
	}else{
		setFlash('../','error','Username Required');
	}
}else{
	setFlash('../','error','Unauthorized Access');
}