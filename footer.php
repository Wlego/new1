
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
		
		<!--регистрация -->
	
		<div id="myModalBoxReg" class="modal fade" data-backdrop="false">
			<div class="modal-dialog modal-sm">
				<div class="modal-content"> 
					<!-- Заголовок модального окна -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Регистрация</h4>
					</div>
					<!-- Основное содержимое модального окна -->
					<div class="modal-body">
						<div class="container-fluid">
						<!-- Контейнер, в котором можно создавать классы системы сеток -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Email</label>				
										<input type="text" id="Emailr" class="form-control"name="Emailr" placeholder="Email"/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Пароль</label>				
										<input type="text" id="Passwordr" class="form-control"name="Passwordr" placeholder="пароль"/>
									</div>
								</div>
								</div>
							</div>
						</div>
					
					<!-- Футер модального окна -->
					<div class="modal-footer">
						<div class="form-group ">						
						<button onclick="post_query('gform.php', 'reg' , 'Emailr.Passwordr')" type="button" class="btn btn-default" data-dismiss="modal">Зарегистрироваться</button>						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!--вход -->
	
		<div id="myModalBoxEnter" class="modal fade" data-backdrop="false">
			<div class="modal-dialog modal-sm">
				<div class="modal-content"> 
					<!-- Заголовок модального окна -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title">Авторизация</h4>
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
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group ">
										<label class="control-label">Пароль</label>				
										<input type="text" id="Password" class="form-control"name="Password" placeholder="пароль"/>
									</div>
								</div>
								</div>
							</div>
						</div>
					
					<!-- Футер модального окна -->
					<div class="modal-footer">
						<div class="form-group ">
						<a href="#" class="next h5">восстановить пароль</a>
						<button onclick="post_query('gform.php', 'login' , 'Email.Password')" type="button" class="btn btn-default" data-dismiss="modal">Войти</button>
						<button type="button" class="btn btn-default">Выйти</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<!-- восстановление пароля -->
		
		
		<div id="myModalBoxRec" class="modal fade" data-backdrop="false" >
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
										<input type="text" id="mailc" class="form-control"name="mailc" placeholder="Email"/>											
											
									</div>
								</div>								 
							</div>
						</div>
					</div>
					
					<!-- Футер модального окна -->
					<div class="modal-footer">
						<div class="form-group ">						
						<button onclick="post_query('gform.php', 'recovery' , 'mailc')" type="button" class="btn btn-default" data-dismiss="modal">отправить</button> <!--  data-dismiss="modal" -->						
						</div>
					</div>
				</div>
			</div>
		</div> 
		
		<!-- код подтверждения -->
		
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
										<br/>
										<div class="col-md-12">
											<div class="form-group ">
												<p class="h6 danger">Код был выслан на указанную вами почту.</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					
					<!-- Футер модального окна -->
					<div class="modal-footer">
						<div class="form-group ">
						<button onclick="post_query('gform.php', 'confirm', 'cod')" type="button" class="btn btn-default" data-dismiss="modal">Отправить</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<span class="left">Все права защищены &copy; 2015</span>
			<span class="right">Социальные кнопки<img src="img/bing.ico"  alt="Группа в контакте" title="Группа в контакте"/></span>
		</footer>

		
    
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
