<?session_start();?>
<!Doctype HTML>

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
						
						
							<li><a href="/new1/">Главаная</a></li>
							<li><a href="feedback" >Обратная связь</a></li>
							<?php if (!$_SESSION['id'])
								 echo'
							<li><a href="#myModalBoxEnter" data-toggle="modal">Вход</a></li>
							<li><a href="reg" >Регистрация</a></li>';
							else echo'
							<li><a href="history" >Профиль</a></li>
							<li><a href="history" >История</a></li>
							<li><a href="#" class="exit">Выйти</a></li>';
													
							?>
							
						</ul>	
					</div>
				</div>	
			</div>	
		</div>
		
	</header>
