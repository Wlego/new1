		
		
		
		
		
		<div class="container forum">
			<div class="row">
			
					<div class="col-sm-9">
						<!-- <span class='glyphicon glyphicon-menu-left' style='color:red;' aria-hidden='true'></span> -->
						<div class="tems">
							<h2 class="title text-center">Форум</h2>
							
							<?php if ($_SESSION['id'])
							echo'<div id="new_messege">
									
										<label class="control-label">Новая тема</label>
										<input type="text" id="theme" class="form-control"name="theme" placeholder="тема"/>
										<label class="control-label">Введите описание вашего вопроса.</label>
										<textarea id="message" name="message" class="form-control" rows="3" placeholder="Введи текст"></textarea>
										<div class="clear"><br/></div>
									
									
							</div><button onclick="post_query(\'all/forum.php\', \'themes\' , \'theme.message\')" type="button" class="btn btn-default" />Создать</button>
							<div class="clear"><br/></div>';
							
							else echo'<div id="new_messege"><a href="#myModalBoxEnter" data-toggle="modal"><h4>Авторизуйтесь или зарегистрируйтесь для отправки сообщения в тему.</h4></а></div>';
							?>
							
							<?php $forum_theme_out=mysqli_query($CONNECT,'SELECT `theme`, `autor`, `message`, `time_date` FROM `forum_theme` WHERE `time_date` <= CURRENT_TIMESTAMP  ');
							while ($Row = mysqli_fetch_assoc($forum_theme_out)) {
								echo '<div class="block" style="border:1px solid #ccc; border-radius: 2px; margin:5px 0; padding:5px">
								<h5><span class="a">'.$Row['theme'].'</span><span style="float:right; font-size:1em;">'.$Row['autor'].'<div class="clear"><br/></div>'.$Row['time_date'].'</span></h5>
								<div class="content">
								<p style="font-size:1.08em">'.$Row['message'].'</p>
								</div>
								</div>';
							}
							?>
							<div class="clear"><br /></div>
							
						</div>
					</div>	
					
					<div class="col-sm-3">
						<div class="right-sidebar">
							<!-- Calendar --><div class="calendar"></div><!-- /Calendar -->
						</div>	
					</div>
			</div>
		</div>