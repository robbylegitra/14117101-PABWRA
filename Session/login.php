<?php
//start session
 session_start();

 include_once('user.php');

 $user = new User();

 if(isset($_POST['login'])){
 $username = $user->escape_string($_POST['username']);



 $password = $user->escape_string($_POST['password']);

 $auth = $user->check_login($username, $password);

 if(!$auth){
 $_SESSION['message'] = 'Username atau password salah';
 header('location:index.php');
 }
 else{
 $_SESSION['user'] = $auth;
 header('location:home.php');
 }
 }
 else{
 $_SESSION['message'] = 'Silahkan login terlebih dahulu';
 header('location:index.php');
 }
 ?>