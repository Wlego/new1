<div class="clear-fix"><br/></div>
		<div class="container">
		<div id="main_soc_block">
				<center>
				<div id="main_soc_block_in">
					<a href="reg.html" class="main_soc_block_in" title="регистрируйтесь">Регистрируйтесь на сайте</a>
					<!-- <a href="reg.html" title="регистрируйтесь">Регся быстрей</a> -->
				</div>
				</center>
			</div>
		</div>
		
		
		<!--вход -->
	
		<div id="myModalBoxEnter" class="modal fade" data-backdrop="false">
			<div class="modal-dialog modal-sm">
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
						<a href="#myModalBoxR" class="next h5">восстановить пароль</a>
						<button type="button" class="btn btn-default" data-dismiss="modal">Войти</button>
						<button type="button" class="btn btn-default">Выйти</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- восстановление пароль -->
		
		
		<div id="myModalBoxR" class="modal fade" data-backdrop="false">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<!-- Заголовок модального окна -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Восстановелние пароля</h4>
					</div>
					<!-- Основное содержимое модального окна -->
					<div class="modal-body">
						<div class="container-fluid">
						<!-- Контейнер, в котором можно создавать классы системы сеток -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Email</label>				
										<input type="text" id="Email" class="form-control"name="Email" placeholder="Email"/>
											 <?php 
											
											//echo ('<p>'.$_SESSION['recovery'].'</p>');
											//$a='Данный E-mail незарегистрирован';
											//if ($_SESSION['recovery']==$a)
											//{echo ('<p>'.$_SESSION['recovery'].'</p>');	}
											//unset($_SESSION['recovery']);
											?> 
									</div>
								</div>								 
							</div>
						</div>
					</div>
					
					<!-- Футер модального окна -->
					<div class="modal-footer">
						<div class="form-group ">
						<!-- <a href="#">восстановить пароль</a> -->
						<button onclick="post_query('/new1/gform.php', 'recovery' , 'Email')" type="button" class="btn btn-default">отправить</button> <!--  data-dismiss="modal" -->
						<!-- <button type="button" class="btn btn-default">Выйти</button> -->
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
	<!-- <script src="js/smtp.js"></script> -->



</body>

</html>