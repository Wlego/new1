<?php
/* echo 'ok'; */

$CONNECT = mysqli_connect('localhost', 'root', '', 'new1'); 
session_start();
if (! $CONNECT ) echo('MySQL error');

/* mysqli_query($CONNECT,'INSERT INTO `users` (`id`, `lastName`, `firstName`, `fatherName`, `inputEmail`, `inputPassword`, `phoneNumber`, `postalAddress`, `regdate`) VALUES (null, "dfgdgdf", "fgsfsgs", "dfgdfg", "sfgfdgdfg", "fdgdfsg", "3211312312", "231321321312", CURRENT_TIMESTAMP)'); */
function go( $url ) {
	exit($url);
}

function email_valid() {
	if ( !filter_var( $_POST['inputEmail'], FILTER_VALIDATE_EMAIL))
	{go('E-mail указан неверно');}
}

function random_str( $num = 30 ) {
	return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
}

function password_valid() {
	if ( !preg_match('/^[A-z0-9]{1,16}$/', $_POST['inputPassword']) )
		go('Пароль указан неверно и может содеражть 1 - 16 символов A-z0-9');
	$_POST['inputPassword'] = md5($_POST['inputPassword']);
}

/* function message( $text ) {
	exit('{ "message" : "'.$text.'"}');
} */
/* if ( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = 'Admin'")) )
	 	echo ('Этот E-mail занят'); */

if ($_POST['login_f']) {

message('Авторизация');

}



else if ($_POST['reg_f']) {
	email_valid();
	password_valid();
	$res=$_POST['inputEmail'];
	if ( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."'")) )
	{go('Этот E-mail занят');}
	
	 	
	
	$code = random_str(5);
	$_SESSION['confirm'] = array(
		'code' => $code,
	 	);
	mail($_POST['inputEmail'], 'Регистрация', "Код подтверждения регистрации: <b>$code</b>");
	/* mysqli_query($CONNECT,'INSERT INTO `users` (`id`, `lastName`, `firstName`, `fatherName`, `inputEmail`, `inputPassword`, `phoneNumber`, `postalAddress`, `regdate`) VALUES (null, "'.$_POST['lastName'].'", "'.$_POST['firstName'].'", "'.$_POST['fatherName'].'", "'.$_POST['inputEmail'].'", "'.$_POST['inputPassword'].'", "'.$_POST['phoneNumber'].'", "'.$_POST['postalAddress'].'", CURRENT_TIMESTAMP)'); */
	go("#myModalBoxCod");
	

/* go('#myModalBox'); */
/* #myModalBox */

}




else if ($_POST['recovery_f']) {

message('Восстановление пароля');

}





else if ($_POST['confirm_f']) {
		
		
		if ( $_SESSION['confirm']['code'] == $_POST['cod'] ){
			mysqli_query($CONNECT,'INSERT INTO `users` (`id`, `lastName`, `firstName`, `fatherName`, `inputEmail`, `inputPassword`, `phoneNumber`, `postalAddress`, `regdate`) VALUES (null, "'.$_POST['lastName'].'", "'.$_POST['firstName'].'", "'.$_POST['fatherName'].'", "'.$_POST['inputEmail'].'", "'.$_POST['inputPassword'].'", "'.$_POST['phoneNumber'].'", "'.$_POST['postalAddress'].'", CURRENT_TIMESTAMP)');	
			go('#myModalBoxEnter');
		}
		else {
			go('код введен неверно');
			
		unset($_SESSION['confirm']);
}
}


?>