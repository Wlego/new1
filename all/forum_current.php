		
		
		
		
		
		<div class="container ">
			<div class="row">
			
					<div class="col-sm-9">
						<!-- <span class='glyphicon glyphicon-menu-left' style='color:red;' aria-hidden='true'></span> -->
						<div class="tems">
							<?php 
							session_start();
							//if ($_POST['theme'])
								echo
							'<h2 class="title text-center">'.$_SESSION['theme'].'</h2>
							<p>'.$_SESSION['message'].'</p>';
							?>
							
							<div class="clear"><br/></div>
							
							<?php  
							if ($_SESSION['id'])
							echo'<div id="new_message">									
										<label class="control-label">Ваше сообщение</label>
										<textarea id="message" name="message" class="form-control" rows="3" placeholder="Введи текст"></textarea>
										<input id="uploadimageforum" type="file" name="file" placeholder="вставка изображения">
										<div class="clear"><br/></div>
										<button onclick="post_query(\'all/forum.php\', \'current\' , \'message\')" type="button" class="btn btn-default">Отправить</button>									
							</div>';
							else echo'<div id="new_messege"><a href="#myModalBoxEnter" data-toggle="modal"><h4>Авторизуйтесь или зарегистрируйтесь для отправки сообщения в тему.</h4></а></div>';
							?>
							
							<?php $forum_theme_out=mysqli_query($CONNECT,'SELECT `autor`, `message`, `time_date` FROM `forum_current` WHERE `time_date` <= CURRENT_TIMESTAMP and  `theme`="'.$_SESSION['theme'].'"');
							while ($Row = mysqli_fetch_assoc($forum_theme_out)) {
								echo '<div class="block" style="border:1px solid #ccc; border-radius: 2px; margin:5px 0; padding:5px">
								<h5><a href="forum_current">'.$Row['autor'].'</a></h5>
								<div class="content">
								<p style="font-size:1.08em">'.$Row['message'].'</p>
								</div>
								</div>';
							}
							?>
						</div>
					</div>	
					
					<div class="col-sm-3">
						<div class="right-sidebar">
							<!-- Calendar --><div class="calendar"></div><!-- /Calendar -->
						</div>	
					</div>
			</div>
		</div>