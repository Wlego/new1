 <?php
//echo ('ok');
session_start();

require_once "connectBDLC.php";

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
	//echo (print_r ($masusers));
	
	if ( !mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."' AND `inputPassword` = '".$vali."' 
													UNION 
													SELECT `id` FROM `furniture_maker` WHERE `inputEmail` = '".$res."' AND `inputPassword` = '".$vali."'")))
		{go('Данный E-mail ненайден или пароль не совпадает.');}
	
	$row=mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `users`  WHERE `inputEmail` = '".$res."'
													UNION
													SELECT * FROM `furniture_maker`  WHERE `inputEmail` = '".$res."'"));
	 	//print_r($row);
		foreach($row as $key => $value)
		//print_r($value);
		$_SESSION[$key] = $value;
	go('profile.php');
	

}

//регистрация

else if ($_POST['reg_f']) {
	$res=$_POST['Emailr'];
	$resu=$_POST['Passwordr'];
	$who=$_POST['choice'];
	email_valid($res);	
	//echo ($vali);
	password_valid($resu);
	//go ($who);
	if (!mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."'")))
	{go('Этот E-mail занят');}
	else	
	$code = random_str(5);
	$_SESSION['confirm'] = array(
		'code' => $code,
		'Email'=> $res,
		'password'=>$vali,
		'who'=>$who
	 	);
	mail($_POST['inputEmail'], 'Регистрация', "Код подтверждения регистрации: <b>$code</b>");
	/* mysqli_query($CONNECT,'INSERT INTO `users` (`id`, `lastName`, `firstName`, `fatherName`, `inputEmail`, `inputPassword`, `phoneNumber`, `postalAddress`, `regdate`) VALUES (null, "'.$_POST['lastName'].'", "'.$_POST['firstName'].'", "'.$_POST['fatherName'].'", "'.$_POST['inputEmail'].'", "'.$_POST['inputPassword'].'", "'.$_POST['phoneNumber'].'", "'.$_POST['postalAddress'].'", CURRENT_TIMESTAMP)'); */
	go("reg");
}

//подтверждение кода высланного на почту при регистрация пользователя

else if ($_POST['confirm_f']) {
		if ( $_SESSION['confirm']['code'] == $_POST['cod'] ){
			if ($_SESSION['confirm']['who']==1) $table='furniture_maker';
			else $table='users';
			//echo $table;
			mysqli_query($CONNECT,'INSERT INTO `'.$table.'` (`id`,`inputEmail`, `inputPassword`, `regdate`) VALUES (null, "'.$_SESSION['confirm']['Email'].'", "'.$_SESSION['confirm']['password'].'", CURRENT_TIMESTAMP)');	
			go('#myModalBoxEnter');
		}
		else {
			go('код введен неверно');
			
		unset($_SESSION['confirm']);
}
}

//восстановление пароля если утерян

else if ($_POST['recovery_f']) {	
	$res=$_POST['mailrec'];
	$resu=$_POST['passwordrec'];
	email_valid($res);	
	//echo ($vali);
	password_valid($resu);
	//echo ($vali);
	if (mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."'
													UNION														
													SELECT `id` FROM `furniture_maker` WHERE `inputEmail` = '".$res."'")))
	{$code = random_str(5);
	$_SESSION['confirm'] = array(
		'code' => $code,
		'Email'=> $res,
		'password'=>$vali
	 	);
	mail($_POST['inputEmail'], 'Регистрация', "Код подтверждения регистрации: <b>$code</b>");
	go("updatepasrec");
	
	
	//echo('дошло');
	//$res=$_POST['mail'];
	//email_valid($res);
	//echo($res);
	//$_SESSION['recovery']=email_valid($res);
	//if $_POST['mail']
	//if ( mysqli_num_rows(mysqli_query($CONNECT, "SELECT `id` FROM `users` WHERE `inputEmail` = '".$res."'")) )		
	//	go("#myModalBoxCod");
	//{$s=mysqli_query($CONNECT, "SELECT `inputPassword` FROM `users` WHERE `inputEmail` = '".$res."'");
	//$password=mysqli_fetch_assoc($s);
	//$pas=$password['inputPassword'];
	////print_r($pas);
	//mail($_POST['Email'], 'Восстановление пароля', "Ваш пароль: <b>$pas</b>");
	//go('Пароль был отправлен вам на почту');
	}
	else {go('Данный E-mail незарегистрирован');
	//$b='Данный E-mail незарегистрирован';
	//$_SESSION['recovery']=$b;
	}
}
else if ($_POST['updatepasrec_f']) {
	if ( $_SESSION['confirm']['code'] == $_POST['cod'] )
		{
		if (mysqli_query($CONNECT,'	UPDATE users,furniture_maker SET  users.inputPassword="'.$_SESSION['confirm']['password'].'",furniture_maker.inputPassword="'.$_SESSION['confirm']['password'].'" WHERE users.inputEmail="'.$_SESSION['confirm']['Email'].'" OR furniture_maker.inputEmail="'.$_SESSION['confirm']['Email'].'"
									'))
		//echo 'Ваш новый пароль сохранен.';
		{go('Ваш новый пароль сохранен.');}
	else {
		go('код введен неверно');
		//unset($_SESSION['confirm']);
		}
}
}
//обнавление пароля из под совей учетки

else if ($_POST['updatepas_f']) {
	 if ($_POST['inputPassword']==$_POST['confirmPassword'])
	 {$resu=$_POST['inputPassword'];
		password_valid($resu);
		mysqli_query($CONNECT,'UPDATE users,furniture_maker SET  users.inputPassword="'.$vali.'",furniture_maker.inputPassword="'.$vali.'" WHERE users.inputEmail="'.$_SESSION['inputEmail'].'" OR furniture_maker.inputEmail="'.$_SESSION['inputEmail'].'"
								');
		echo 'Ваш новый пароль сохранен.';
	 }
	
}

//обнавление данных пользователя со страницы профиля

else if ($_POST['update_f']) {
	$res=$_POST['inputEmail'];	
	email_valid($res);	
	mysqli_query($CONNECT,'UPDATE users,furniture_maker SET  users.lastName="'.$_POST['lastName'].'", users.firstName="'.$_POST['firstName'].'", users.fatherName="'.$_POST['fatherName'].'", users.inputEmail="'.$_POST['inputEmail'].'", users.phoneNumber="'.$_POST['phoneNumber'].'", users.postalAddress="'.$_POST['postalAddress'].'", 
																furniture_maker.lastName="'.$_POST['lastName'].'", furniture_maker.firstName="'.$_POST['firstName'].'", furniture_maker.fatherName="'.$_POST['fatherName'].'", furniture_maker.inputEmail="'.$_POST['inputEmail'].'", furniture_maker.phoneNumber="'.$_POST['phoneNumber'].'", furniture_maker.postalAddress="'.$_POST['postalAddress'].'" 
																WHERE users.inputEmail`="'.$_SESSION['inputEmail'].'" OR furniture_maker.inputEmail`="'.$_SESSION['inputEmail'].'"');
	$row=mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `users` WHERE `inputEmail` = '".$res."'
													UNION
													SELECT * FROM `furniture_maker` WHERE `inputEmail` = '".$res."'"));
	 	//print_r($row);
		foreach($row as $key => $value)
		//print_r($value);
		$_SESSION[$key] = $value;
}


?>