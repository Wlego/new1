<!-- Doctype HTML -->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 	<!-- мета тег для определения кодировки сайта -->
<meta name="keywords" content="test, site, website" />					<!-- теги для поискового робота -->
<meta name="description" content="Этот сайт является пробным сайтом" />	<!-- мета тег названия сайта -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="calendar-redhead/calendar-redhead.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" /> 

	

																			<!-- путь к стилям(это коммент) -->
<link href="img/PI16.ICO" rel="shortcut icon" type="image/x-icon" />		<!--изображение иконки вкладки браузера -->

<title>Тестовый сайт</title>												<!--название вкладки браузера -->


</head>
<body>
<!-- <script type="text/javascript">
	alert();
</script> -->
	
	<header>
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<a class="nav navbar-brand" href="index.php" title="На главную" id="logo">МЕБЕЛЬ НА ЗАКАЗ</a> 
					</div>
					
					
					<div class="navbar-left navbar-form ">
						<div class="form-group">
						<input type="text" class="form-control" placeholder="Поиск по сайту"/>
						</div>
					</div>	
					
					
					<div class="navbar-right menu" ><!-- id="menuHrefs" -->
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="index.php">О нас</a></li>
							<li><a href="feedback.php" >Обратная связь</a></li>
							<li><a href="#myModalBox" data-toggle="modal">Вход</a></li>
							<li><a href="reg.php" >Регистрация</a></li>
						</ul>	
					</div>
				</div>	
			</div>	
		</div>
		
	</header>
	
		<div class="clear"><br /></div>
		

		
		<div id="wrapper">
			<div id="articles">
				<form action="" method="post"> <!-- class="form" -->
				
					<div class="form-group ">
						<label class="control-label">Тема</label>				
						<input type="text" id="subject" class="form-control"name="subject" placeholder="тема"/>
					</div>
				
					<label for="mail">Email</label>
					<input type="email" id="mail" class="form-control" name="mail" placeholder="address@example.com"/>
					<label for="name">Name</label>
					<input type="text" id="name" class="form-control" name="name" placeholder="Имя"/>
					<label for="message">Текст</label>
					<textarea id="message" name="message" class="form-control" rows="3" placeholder="Введи текст"></textarea>
					<input type="submit" class="btn btn-primary" role="button" value="Отправить" id="send" name="send" />
				</form>
			</div>
		</div>
		
	</div>
	
	<?php
		if(isset($_POST["send"])){
			$to="wlegoofkool@gmail.com";
			$subject=htmlspecialchars($_POST["subject"]);
			$mail=htmlspecialchars($_POST["mail"]);
			$name=htmlspecialchars($_POST["name"]);
			$message=htmlspecialchars($_POST["message"]); 
			mail($to,$subject,$mail,$name,$message);
		}
	?>	
	
	<div id="myModalBox" class="modal fade" data-backdrop="false">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Заголовок модального окна -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Вход</h4>
					</div>
					<!-- Основное содержимое модального окна -->
					<div class="modal-body">
						<div class="container-fluid">
						<!-- Контейнер, в котором можно создавать классы системы сеток -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Логин</label>				
										<input type="text" id="subject" class="form-control"name="subject" placeholder="Логин"/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Пароль</label>				
										<input type="text" id="subject" class="form-control"name="subject" placeholder="пароль"/>
									</div>
								</div>
								</div>
							</div>
						</div>
					
					<!-- Футер модального окна -->
					<div class="modal-footer">
						<div class="form-group ">
						<button type="button" class="btn btn-default" data-dismiss="modal">Войти</button>
						<button type="button" class="btn btn-default">Выйти</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<footer>
			<span class="left">Все права защищены &copy; 2015</span>
			<span class="right">Социальные кнопки<img src="img/bing.ico"  alt="Группа в контакте" title="Группа в контакте"/></span>
		</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="calendar-redhead/calendar.js"></script>
	<script src="calendar-redhead/moment-2.2.1.js"></script>	
	<script src="js/scriptbox.js"></script>



</body>

</html>
