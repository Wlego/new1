
	
	<div class="container">
		
		
		<div class="row">
		
		
			<form class="form-horizontal" enctype="multipart/form-data">
			
				<h2><?php echo $_SESSION['inputEmail'];?></h2>
				
				<div class="clear"><br/></div>
				
				<div class="col-xs-2 ava" align="center">
					<div class="avatar col-xs-12">
						<a class="thumbnail" type="button" onclick="uploadfunc();"><span class="glyphicon glyphicon-user" style="font-size:100px"></span></a>
						<input id="uploadimage" type="file" style="display:none">
					</div>
				</div>
				
				
				<div id="fios">
					<div class="form-group">
						<label class="control-label col-xs-3" for="lastName">Фамилия:</label>
						<div class="col-xs-9 fio">
							<input type="text" class="form-control" id="lastName" placeholder="Введите фамилию" value="<?php echo $_SESSION['lastName'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-3" for="firstName">Имя:</label>
						<div class="col-xs-9 fio">
							<input type="text" class="form-control" id="firstName" placeholder="Введите имя" value="<?php echo $_SESSION['firstName'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-3" for="fatherName">Отчество:</label>
						<div class="col-xs-9 fio">
							<input type="text" class="form-control" id="fatherName" placeholder="Введите отчество" value="<?php echo $_SESSION['fatherName'];?>">
						</div>
					</div>					
				</div>
				
				
				<div class="form-group">
					<label class="control-label col-xs-3" for="inputEmail">Email:</label>
					<div class="col-xs-9">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $_SESSION['inputEmail'];?>">
					</div>
				</div>				
				
				<div class="form-group">
					<label class="control-label col-xs-3" for="phoneNumber">Телефон:</label>
					<div class="col-xs-9">
						<input type="tel" class="form-control" id="phoneNumber" placeholder="Введите номер телефона" value="<?php echo $_SESSION['phoneNumber'];?>">
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-xs-3" for="postalAddress">Адрес:</label>
					<div class="col-xs-9">
					<textarea rows="1" class="form-control" id="postalAddress" placeholder="Введите адрес"><?php echo $_SESSION['postalAddress'];?></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-xs-offset-3 col-xs-9">
						<label class="checkbox-inline">
							<input id="cheked" type="checkbox" value="agree">  Я согласен с <a href="#">условиями</a>
						</label>
					</div>
				</div>	
			
			</form>	
		
			<br />			
			
			<div class="form-group">
				<div class="col-xs-push-4 col-xs-6">
				<button onclick="post_query('gform.php', 'update', 'lastName.firstName.fatherName.inputEmail.phoneNumber.postalAddress')" disabled="" type="button" class="btn btn-default reg" value="Регистрация">Сохранить</button>				
				</div>
			</div>	
			
			<form id="pass" class="form-horizontal pass">
			
				<div class="form-group">
					<label class="control-label col-xs-3" for="inputPassword">Смена пароля:</label>
					<div class="col-xs-9">
						<input type="password" class="form-control" id="inputPassword" placeholder="Введите новый пароль" autocomplete="off">
					</div>
				</div>
				
				<div class="form-group confirmPassword">
					<label class="control-label col-xs-3" for="confirmPassword">Подтвердите пароль:</label>
					<div class="col-xs-9">
						<input type="password" class="form-control" id="confirmPassword" placeholder="Введите пароль ещё раз" autocomplete="off">
					</div>
				</div>
			
			
			</form>
			
			<br />
			
			
			<div class="form-group">
				<div class="col-xs-push-4 col-xs-6">
				<button onclick="post_query('gform.php', 'updatepas', 'confirmPassword')" type="button" class="btn btn-default passes" value="Регистрация">Сохранить новый пароль</button>				
				</div>
			</div>
		
		</div>
		
	</div>
 
		 
 
