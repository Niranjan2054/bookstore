<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/bookstore/config/init.php';
debugger($_POST);
$data = array();
if (isset($_POST) && !empty($_POST)) {
	if (isset($_POST['username']) && !empty($_POST['username'])) {
		$data['username'] = filter_var($_POST['username'],FILTER_VALIDATE_EMAIL);
		if ($data['username']) {
			if (isset($_POST['password']) && !empty($_POST['password'])) {
				$user = new user();
				$data = array(
					'username' => sanitize($_POST['username']),
					'email' => filter_var($_POST['email'],FILTER_VALIDATE_EMAIL),
					'password' => sha1($_POST['email'].$_POST['password']),
					'address' => $_POST['address_city'].",".$_POST['address_country'],
					'role' => sanitize($_POST['role']),
				);
				$users = $user->addUser($data);
				debugger($user_info);
				debugger($data);
				if ($users) {
					setFlash('../user','success','User added Successfully');
				}else{
					setFlash('../user','error','Error While Adding To Database');
				}
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