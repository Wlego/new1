 <?php
//echo ('ok');
session_start();

$CONNECT = mysqli_connect('localhost', 'root', '', 'new1'); 

if (!$CONNECT ) echo('MySQL error');

/* mysqli_query($CONNECT,'INSERT INTO `users` (`id`, `lastName`, `firstName`, `fatherName`, `inputEmail`, `inputPassword`, `phoneNumber`, `postalAddress`, `regdate`) VALUES (null, "dfgdgdf", "fgsfsgs", "dfgdfg", "sfgfdgdfg", "fdgdfsg", "3211312312", "231321321312", CURRENT_TIMESTAMP)'); */
function go( $url ) {
	exit($url);
}

function email_valid($val) {
	if ( !filter_var( $val, FILTER_VALIDATE_EMAIL))
	{go('E-mail указан неверно');}
}

function random_str( $num = 30 ) {
	return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
}

function password_valid($val) {
	if ( !preg_match('/^[A-z0-9]{1,16}$/', $val) )
		go('Пароль указан неверно и может содеражть 1 - 16 символов A-z0-9');
	global $vali;
	//echo ($vali);
	$vali=md5($val);
	//echo ($val);
}

/* function message( $text ) {
	exit('{ "message" : "'.$text.'"}');
} */
/* if ( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = 'Admin'")) )
	 	echo ('Этот E-mail занят'); */

//авторизация	
	
if ($_POST['login_f']) {
	$res=$_POST['Email'];
	$res1=$_POST['Password'];
	
	email_valid($res);
	password_valid($res1);
	//echo ($vali);
	if ( !mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."' AND `inputPassword` = '".$vali."'")))
		{go('Данный E-mail ненайден или пароль не совпадает.');}
	
	$row=mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `users` WHERE `inputEmail` = '".$res."'"));
	 	//print_r($row);
		foreach($row as $key => $value)
		//print_r($value);
		$_SESSION[$key] = $value;
		//$_SESSION['loader']=0;
			//$_SESSION['id'] = 1;
			//print_r($_SESSION['id']);
	go('profile.php');


}

//регистрация

else if ($_POST['reg_f']) {
	$res=$_POST['Emailr'];
	email_valid($res);
	$resu=$_POST['Passwordr'];
	//echo ($vali);
	password_valid($resu);
	//echo ($vali);
	if ( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."'")))
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



//восстановление пароля

else if ($_POST['recovery_f']) {
	//$_SESSION['recovery']=$_POST;
	//echo('дошло');
	$res=$_POST['mail'];
	email_valid($res);
	//echo($res);
	//$_SESSION['recovery']=email_valid($res);
	if ( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."'")) )
	{$s=mysqli_query($CONNECT, "SELECT `inputPassword` FROM `users` WHERE `inputEmail` = '".$res."'");
	$password=mysqli_fetch_assoc($s);
	$pas=$password['inputPassword'];
	//print_r($pas);
	mail($_POST['Email'], 'Восстановление пароля', "Ваш пароль: <b>$pas</b>");
	go('Пароль был отправлен вам на почту');
	}
	else {go('Данный E-mail незарегистрирован');
	//$b='Данный E-mail незарегистрирован';
	//$_SESSION['recovery']=$b;
		}


}



//подтверждение кода высланного на почту и регистрация пользователя

else if ($_POST['confirm_f']) {
	
		$resc=$_POST['inputPassword'];
		password_valid($resc);
		
		
		if ( $_SESSION['confirm']['code'] == $_POST['cod'] ){
			mysqli_query($CONNECT,'INSERT INTO `users` (`id`,`inputEmail`, `inputPassword`, `regdate`) VALUES (null, "'.$_POST['inputEmail'].'", "'.$vali.'", CURRENT_TIMESTAMP)');	
			go('#myModalBoxEnter');
		}
		else {
			go('код введен неверно');
			
		unset($_SESSION['confirm']);
}
}

else if ($_POST['update_f']) {
	$res=$_POST['inputEmail'];	
	email_valid($res);	
	 
	mysqli_query($CONNECT,'UPDATE `users` SET  `lastName`="'.$_POST['lastName'].'", `firstName`="'.$_POST['firstName'].'", `fatherName`="'.$_POST['fatherName'].'", `inputEmail`="'.$_POST['inputEmail'].'", `phoneNumber`="'.$_POST['phoneNumber'].'", `postalAddress`="'.$_POST['postalAddress'].'" WHERE `inputEmail`="'.$_SESSION['inputEmail'].'" ');	
}
//else if ($_POST['exits_f']) {		
//		session_destroy();
//		header('location: /new1/');
//		
//}

//else if ($_POST['loader']) {
//	$querys=mysqli_query($CONNECT, "SELECT text FROM histori LIMIT ".$_SESSION['loader'].",2 ");
//	if(!mysqli_num_rows($querys)){
//		if($_SESSION['loader']==0)go('empy');
//		else go('end');
//	
//	}
//	$_SESSION['loader']+=2;
//	$go=array();
//	while($rows=mysqli_fetch_assoc($querys)){
//		$go+=$rows['text'];
//		//go($go);
//	}
//	go('приевет');
//}
?>