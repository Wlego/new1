<?php include_once "header.php" ?>
	
	<div class="container">
		<div class="col-sm-9">
		
		
			<form class="form-horizontal">
			<div class="container">
				<h2>Регистрация</h2>
				<div class="clear"><br /></div>
				<div class="col-xs-3">
				<div class="avatar">
					<a class="thumbnail "><span class="glyphicon glyphicon-user" style="font-size:100"></span></a>
				</div>
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
			</div>
			</form>
			<br />
			<div class="form-group">
				<div class="col-xs-offset-3 col-xs-9">
				<button onclick="post_query('/new1/gform.php', 'reg', 'lastName.firstName.fatherName.inputEmail.inputPassword.phoneNumber.postalAddress')"  class="btn btn-default reg" value="Регистрация">Зарегистрироваться</button>
				<!-- <button class="reg">0</button> -->
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
 
	<?php include_once "footer.php" ?>