<?php
session_start();

require_once "../connectBDLC.php";
//echo $_POST['theme'].$_POST['message'];
if ($_POST['themes_f'])
	//print_r $_SESSION['inputEmail'];
mysqli_query($CONNECT,'INSERT INTO `forum_theme` (`id`,`theme`, `autor`, `message`, `time_date`) VALUES (null, "'.$_POST['theme'].'", "'.$_SESSION['inputEmail'].'", "'.$_POST['message'].'", CURRENT_TIMESTAMP)');	
//$forum_theme_out=mysqli_fetch_assoc(mysqli_query($CONNECT,'SELECT `theme`, `autor`, `message`, `time_date` FROM `forum_theme` WHERE `inputEmail` = '.$_SESSION['inputEmail'].''));
if ($_POST['current_f'])
mysqli_query($CONNECT,'INSERT INTO `forum_current` (`id`,`theme`, `autor`, `message`, `time_date`) VALUES (null, "'.$_SESSION['theme'].'", "'.$_SESSION['inputEmail'].'", "'.$_POST['message'].'", CURRENT_TIMESTAMP)');		
echo 'rerrefresh_theme';
//end if;
?>