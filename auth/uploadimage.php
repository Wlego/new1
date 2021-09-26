<?php
session_start();
require_once "../connectBDLC.php";


		if ($_FILES['file']['type'] != 'image/jpeg')  {exit ('Не верный тип изображения.');}
		//if ($_FILES['file']['size'] > 400000) exit ('Размер изображения не должен привышать 396kb.');
		else {$Image = imagecreatefromjpeg($_FILES['file']['tmp_name']);
		$Size = getimagesize($_FILES['file']['tmp_name']); //получаем фактический размер нашей картинки
		$Tmp = imagecreatetruecolor(100, 100); //создание цветного изображения 100x100 px
		imagecopyresampled($Tmp, $Image, 0, 0, 0, 0, 100, 100, $Size[0], $Size[1]); //кадрируем файл из временной директории temp на сервере до 100px и записываем его в ранее созданную картинку
		
		$Download='uploads/'. $_FILES['file']['name'];		//путь с именем файла
		if ($Download) unlink('uploads/'.$_SESSION['nameAvatar']);//если файл с таким именем есть то удаляем его
		
		$_SESSION['nameAvatar']=$_FILES['file']['name'];	//записываем имя файла в сессиию
		
		mysqli_query($CONNECT,'UPDATE `users` SET `nameAvatar`="'.$_FILES['file']['name'].'" WHERE `inputEmail`="'.$_SESSION['inputEmail'].'" ');//загрузка названия файла в базу данных
		
		$uploaddir = './uploads'; // . - текущая папка где находится submit.php
		if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );// cоздадим папку если её нет
		
		
				
		imagejpeg($Tmp, $Download);	//создание картинки размером $tmp в директории $Download
		imagedestroy($Image); //удаление временных файлов
		imagedestroy($Tmp);
		echo 'uploadsucces,'.$_SESSION['nameAvatar'].'';
		
        //move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
		//echo '<>';
		
    }
	
?>