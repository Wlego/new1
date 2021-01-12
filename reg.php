<!-- Doctype HTML -->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 	<!-- мета тег для определения кодировки сайта -->
<meta name="keywords" content="test, site, website" />					<!-- теги для поискового робота -->
<meta name="description" content="Этот сайт является пробным сайтом" />	<!-- мета тег названия сайта -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

	
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
							<li><a href="#myModalBoxEnter" data-toggle="modal">Вход</a></li>
							<li><a href="reg.php" >Регистрация</a></li>
						</ul>	
					</div>
				</div>	
			</div>	
		</div>
		
	</header>
	
		<div class="clear"><br /></div>
	
	<div class="container">
	<h2>Регистрация</h2>
	
<form class="form-horizontal">
<div>
	<div class="avatar col-xs-3">
		<a class="thumbnail "><span class="glyphicon glyphicon-user" style="font-size:130px;"></span></a>
	</div>
	<div class="col-xs-9">
	<div class="form-group">
		<label class="control-label col-xs-3" for="lastName">Фамилия:</label>
		<div class="col-xs-9">
		<input type="text" class="form-control" id="lastName" placeholder="Введите фамилию">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="firstName">Имя:</label>
		<div class="col-xs-9">
		<input type="text" class="form-control" id="firstName" placeholder="Введите имя">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-xs-3" for="fatherName">Отчество:</label>
		<div class="col-xs-9">
		<input type="text" class="form-control" id="fatherName" placeholder="Введите отчество">
		</div>
	</div>
	</div>
</div>	
  <div class="form-group">
    <label class="control-label col-xs-3" for="inputEmail">Email:</label>
    <div class="col-xs-9">
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-xs-3" for="inputPassword">Пароль:</label>
    <div class="col-xs-9">
      <input type="password" class="form-control" id="inputPassword" placeholder="Введите пароль" autocomplete="off">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3" for="confirmPassword">Подтвердите пароль:</label>
    <div class="col-xs-9">
      <input type="password" class="form-control" id="confirmPassword" placeholder="Введите пароль ещё раз" autocomplete="off">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-xs-3" for="phoneNumber">Телефон:</label>
    <div class="col-xs-9">
      <input type="tel" class="form-control" id="phoneNumber" placeholder="Введите номер телефона">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-3" for="postalAddress">Адрес:</label>
    <div class="col-xs-9">
      <textarea rows="3" class="form-control" id="postalAddress" placeholder="Введите адрес"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-3 col-xs-9">
      <label class="checkbox-inline">
        <input type="checkbox" value="agree">  Я согласен с <a href="#">условиями</a>
      </label>
    </div>
  </div>
</form>
<br />
<div class="form-group">
    <div class="col-xs-offset-3 col-xs-9">
	<button onclick="post_query('/new1/gform.php', 'reg', 'lastName.firstName.fatherName.inputEmail.inputPassword.phoneNumber.postalAddress')"  class="btn btn-default reg" value="Регистрация">Зарегистрироваться</button>
	<button class="reg">0</button>
	</div>
</div>	
</div>
 
	<div id="myModalBoxEnter" class="modal fade" data-backdrop="false">
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
									<input type="text" id="login" class="form-control"name="login" placeholder="Логин"/>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group ">
									<label class="control-label">Пароль</label>				
									<input type="text" id="password" class="form-control"name="password" placeholder="пароль"/>
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
		
	<div id="myModalBoxCod" class="modal fade"  data-backdrop="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Заголовок модального окна -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Код подтверждения</h4>
				</div>
				<!-- Основное содержимое модального окна -->
				<div class="modal-body">
					<div class="container-fluid">
					<!-- Контейнер, в котором можно создавать классы системы сеток -->
						<div class="row">
							<div class="col-md-12">
								<div class="form-group ">
									<label class="control-label">Код</label>				
									<input type="text" id="cod" class="form-control" name="cod" placeholder="Введите код"/>
								</div>
							</div>
							</div>
						</div>
					</div>
				
				<!-- Футер модального окна -->
				<div class="modal-footer">
					<div class="form-group ">
					<button onclick="post_query('/new1/gform.php', 'confirm', 'cod.lastName.firstName.fatherName.inputEmail.inputPassword.phoneNumber.postalAddress')" type="button" class="btn btn-default" data-dismiss="modal">Отправить</button>
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
	<script src="js/scriptbox.js"></script>



</body>

</html>