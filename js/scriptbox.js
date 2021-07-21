
	
var massiv0,massiv1,al,ali=new Array();
	alemas=new Array(2);

function massiv(massiv0,massiv1){
	var v=0;
	for(var i=0; i<massiv0.length;i++){
			for(var j=0; j<massiv1.length;j++){
				ali[v]=massiv0[i]+"/"+massiv1[j]+"/";
			v=v+1;}
			}
}	




function imgajax(){$.ajax({
			url : folder,
			async: false,
			success: function (data) {
				$(data).find("a").attr("href", function (i, val) {
					if( val.match(/\.(jpe?g|png|gif)$/) ) { 
						$("#compaunt").append( "<div class='images'><img src='"+ folder + val +"'><br><p>"+val+
												"</p></div>");
				} 
				});
			}
		});
	folder="img/";
}

function slider(){
	var v=0,u=0,l=0,f=0,m=0;
		massivimg= new Array;
		massivimgin= new Array;
		mas= new Array;
		mas1= new Array;
		mas2= new Array;
		
	/* заполняем массив ссылками изображений и удаляем из них расширение и номер */
	for(var i=0;i<$('#compaunt img').length;i++){
	massivimg[i] = $('#compaunt img').eq(i).attr('src');
	massivimgin[i]=massivimg[i].slice(0,-6);
	}
	
	/* создаем массив индексов одинаковых элементов без учета последнего*/
 	for(var i=0;i<massivimgin.length;i++){			
	if (massivimgin[i] == massivimgin[i+1]){mas.push(i);}
		}
		
	/* вычисляем и создаем массив первых элементов групп одинаковых элементов*/
	for(var i=mas.length;i>0;i--){
	if ((mas[i]-mas[i-1])>1){mas1.push(mas[i]);}
/* 	if(i-1==0){mas1.push(mas[i]-1);} */ 
	}
	if (mas[i]==0){mas1.push(mas[i]);}
	
	/* вычисляем и создаем массив последних элементов групп одинаковых элементов */
	for(var i=0;i<mas.length;i++){
	if (((mas[i+1]-mas[i])>1)||(i==mas.length-1) ){
		mas2.push(mas[i]+1);}
		}
		
	/* добавляем блокам класс subslider с порядковым номером  группы для дальнейшего объединения*/
	mas1.reverse();
	for(var i=0;i<mas1.length;i++){
		$('#compaunt div').slice(mas1[i],mas2[i]+1).addClass('subslider'+u);	
		u=u+1;
	}
	u=0;
	
	/* помещаем каждую группу в свой класс slider с номером, в блоке id="compaunt" */
	for(var i=0;i<mas1.length;i++){
	l='.subslider'+i;
	$(l).wrapAll('<div class="slider'+v+'"></div>');
	v=v+1;}
	v=0;
	
	for(var i=0;i<mas1.length;i++){
	l=".slider"+i+" div";
	m=".slider"+i;
	f=(mas2[i]+1)-mas1[i];
	$(l).slice(0,f).addClass('item');
	$(l).slice(0,f).removeClass('subslider'+i);
	$(l).eq(0).addClass('active');
	$(m).addClass('carousel-inner');
	$(m).removeClass('slider'+i);
	$('.carousel-inner').eq(i).wrap('<div id="slider-carousel'+i+'" class="carousel slide" data-ride="carousel"></div>');
	$('.carousel-inner').eq(i).after('<a href="#slider-carousel'+i+'" class="left control-carousel hidden-xs" data-slide="prev"><i class="fa fa-angle-left"></i></a><a href="#slider-carousel'+i+'" class="right control-carousel hidden-xs" data-slide="next"><i class="fa fa-angle-right"></i></a>');
	$('.carousel-inner').eq(i).before('<ol class="carousel-indicators"><li data-target="#slider-carousel'+i+'" data-slide-to="0" class="active"></li><li data-target="#slider-carousel'+i+'" data-slide-to="1"></li><li data-target="#slider-carousel'+i+'" data-slide-to="2"></li></ol>');
	}
	/* $('.carousel').wrap('<section id="slider"><div class="container"><div class="row"><div class="col-sm-9"></div></div></div></section>'); */
} 	
	/* загрузка картинок из папки на сервере по выбору в сайдбаре */
	
	var folder="img/";
	var massivkitchen=["kitchendirect","kitchenangular","kitchenp-figurative"];
	var massivkitchenstyle=["classic","modern","standart"];
	$('.col-sm-3 a').click( function (){
		ale=$(this).attr('href');
		ale=ale.slice(1);
		$('#0').css("display","none");
		$('#current').css("display","inline");
		$("#compaunt").empty();
		
				if (ale=="kitchen"){								/* формирование ссылок для вызова изображний нужной категории */
					massiv(massivkitchen,massivkitchenstyle);
					for(var i=0; i<ali.length;i++){
					folder=folder+ale+"/"+ali[i];
					(function(i){
					imgajax();
					})(i);
					}
				}
					if (ale=="kitchendirect"){
					al=massivkitchenstyle;
					for(var i=0; i<al.length;i++){
					folder=folder+"kitchen/"+ale+"/"+al[i]+"/";
					(function(i){
					imgajax();
					})(i);
					}
				}
					if (ale=="kitchenangular"){
					al=massivkitchenstyle;
					
					for(var i=0; i<al.length;i++){
					folder=folder+"kitchen/"+ale+"/"+al[i]+"/";
					(function(i){
					imgajax();
					})(i);
					}
				}
					if (ale=="kitchenp-figurative"){
					al=massivkitchenstyle;
					for(var i=0; i<al.length;i++){
					folder=folder+"kitchen/"+ale+"/"+al[i]+"/";
					(function(i){
					imgajax();
					})(i);
					}
				}	
					if (ale=="kitchendirectclassic"){
					/* ale=massivkitchen[0]; */
					al=massivkitchenstyle;
					folder=folder+"kitchen/"+massivkitchen[0]+"/"+al[0]+"/";
					imgajax();
				}		
					if (ale=="kitchendirectmodern"){
					ale=massivkitchen[0];
					al=massivkitchenstyle;
					folder=folder+"kitchen/"+ale+"/"+al[1]+"/";
					imgajax();
				}		
					if (ale=="kitchendirectstandart"){
					ale=massivkitchen[0];
					al=massivkitchenstyle;
					folder=folder+"kitchen/"+ale+"/"+al[2]+"/";
					imgajax();
				}
		
		slider();
		
	});	
	
		
	
	
/* отправка форм на сервер	 */
	
function post_query( url, name, data ) {
	
	
	var str = '';


	$.each( data.split('.'), function(k, v) {
		str += '&' + v + '=' + $('#' + v).val();
	} );

	//alert( str);
	$.ajax(

	{
		url : url,
		type: 'POST',
		data: name + '_f=1' + str,
		cache: false,		
		success:function( result ) {
			//alert( result);
			
			var obj = result;
			
			if (obj.indexOf('#')!=-1) $(obj).modal('show');
			else if (obj.indexOf('код введен неверно')!=-1) {alert( obj ); $('#myModalBoxCod').modal('show');}
			else if (obj.indexOf('Данный E-mail незарегистрирован')!=-1){
				$('#myModalBoxReg .col-md-12').eq(1).remove();
				$('#myModalBoxReg .col-md-12').after('<div class="col-md-12"><div class="form-group "><p class="h6 danger">Данный E-mail незарегистрирован</p></div></div>');}			
			else if (obj.indexOf('Пароль был отправлен вам на почту')!=-1){
				$('#myModalBoxReg .col-md-12').eq(1).remove();
				$('#myModalBoxReg .col-md-12').after('<div class="col-md-12"><div class="form-group "><p class="h6 danger">Пароль был отправлен вам на почту</p></div></div>');}
			else if (obj.indexOf('.php')!=-1) {
				obj=obj.slice(0,-4);
			//setTimeout(function(){window.location.href = obj},5);
			window.location.href = obj;
			}
			//else if (obj.indexOf('empty')!=-1)
			//	{$('#content').text('история пуста');}
			//else if(obj.indexOf('end')!=-1)
			//	{$('#content').append(obj);}
			else alert( obj );
	}
	}

	);

}



/* крестики при валидации данных формы профиля */

$('.reg').on('click',function valid_form(){
	/* alert('1'); */
	$('form .glyphicon-remove').remove();
	if ($('#lastName').val()==""){$('div.form-group').eq(1).addClass('has-error has-feedback');
		$('#lastName').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
		
	if ($('#firstName').val()==""){$('div.form-group').eq(2).addClass('has-error has-feedback');
		$('#firstName').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
		
	if ($('#fatherName').val()==""){$('div.form-group').eq(3).addClass('has-error has-feedback');
		$('#fatherName').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
		
	if ($('#inputEmail').val()==""){$('div.form-group').eq(4).addClass('has-error has-feedback');
		$('#inputEmail').after('<span class="glyphicon glyphicon-remove show form-control-feedback"></span>');}			
	
	if ($('#phoneNumber').val()==""){$('div.form-group').eq(5).addClass('has-error has-feedback');
		$('#phoneNumber').after('<span class="glyphicon glyphicon-remove show form-control-feedback"></span>');}
		
	if ($('#postalAddress').val()==""){$('div.form-group').eq(6).addClass('has-error has-feedback');
		$('#postalAddress').after('<span class="glyphicon glyphicon-remove show form-control-feedback"></span>');}
		
	
	
	
	//if ($('#firstName').val()!=""){$('div.form-group').eq(2).removeClass('has-error has-feedback');}
	//if ($('#fatherName').val()!=""){$('div.form-group').eq(3).removeClass('has-error has-feedback');}	
	//if ($('#phoneNumber').val()!=""){$('div.form-group').eq(5).removeClass('has-error has-feedback');}
	//if ($('#postalAddress').val()!=""){$('div.form-group').eq(6).removeClass('has-error has-feedback');}
	
});

//валидации формы смены пароля

$('.passes').on('click',function valid_form(){
	/* alert('1'); */
	$('form .glyphicon-remove').remove();
	$('div.different').remove();
	if ($('#inputPassword').val()==""){$('div.form-group').eq(7).addClass('has-error has-feedback');
		$('#inputPassword').after('<span class="glyphicon glyphicon-remove show form-control-feedback"></span>');}

	if ($('#confirmPassword').val()==""){$('div.form-group').eq(8).addClass('has-error has-feedback');
		$('#confirmPassword').after('<span class="glyphicon glyphicon-remove show form-control-feedback"></span>');}
		
	else if ($('#inputPassword').val()!==$('#confirmPassword').val()){$('div.form-group').eq(8).addClass('has-error has-feedback');
		$('#confirmPassword').after('<span class="glyphicon glyphicon-remove show form-control-feedback"></span>');
		$('div.confirmPassword').after('<div class="form-group col-xs-push-3 col-xs-6 different"><h5 style="color:red">Пароли не совпадают!</h5></div>');}

	//if ($('#inputPassword').val() == $('#confirmPassword').val()){$('div.form-group').eq(6).removeClass('has-error has-feedback');}
		
});	

	
/* $(document).ready(function() {
if ($('#lastName').val()!=""){$('div.form-group').eq(1).removeClass('has-error has-feedback');
		$('#lastName').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>').remove();}
}); */

//модальные окна

 $(".next").click( function (){	
	$('.modal').modal('hide');//закрыть все окна
	$('#myModalBoxRec').modal('show');//открыть нужное
});


//активация кнопки при нажатии на checkbox

$('#cheked').on('change', function(){
  if($(this).is(':checked')) $('.reg').attr('disabled', false);
  else $('.reg').attr('disabled', true);
});

//Вызов загрузки аватара

function uploadfunc(){
	$('#uploadimage').click();
	var files; // переменная. будет содержать данные файлов

	// заполняем переменную данными, при изменении значения поля file 
	$('input[type=file]').on('change', function(){
		files = this.files;
	

	var file_data = $('#uploadimage').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
	 $.ajax({
                url: '/new1/auth/uploadimage.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response){
                    alert(php_script_response);
                }
     });
	 });
}
/* $(document).ready(function() { 
            var windowWidth = $(window).width();
            if(windowWidth >= 1250)$("#fios").addClass("col-xs-9");
				else $("#fios").removeClass("col-xs-9");
			if(windowWidth < 1250)$("#fios").addClass("col-xs-12");
				else $("#fios").removeClass("col-xs-12");
            if(windowWidth > 1830)$("#fios").addClass("col-xs-push-1");
				else $("#fios").removeClass("col-xs-push-1");
				
            $(window).resize(function(){
                var windowWidth = $(window).width(); 
                if(windowWidth >= 1250)$("#fios").addClass("col-xs-9");
					else $("#fios").removeClass("col-xs-9");
				if(windowWidth < 1250)$("#fios").addClass("col-xs-12");
					else $("#fios").removeClass("col-xs-12");
				if(windowWidth > 1830)$("#fios").addClass("col-xs-push-1");
					else $("#fios").removeClass("col-xs-push-1");
             }); 
        }); */

//$("#exit").click( function(){post_query( 'gform.php', 'exits', 'data');});

//$(".load").click( function(){post_query( 'gform.php', 'loader', 'data');});

//function load_page(){
//	$.get('history',function(data){
//	if (data=='empty')
//		{$('#content').text('история пуста');}
//	else if(data!='end')	
//		{$('#content').append(data);}	
//	});
//}

//$(document).ready(function(){
//	load_page();
//});
//const myForm = $("#myForm");

////const code = myForm.find("#code");
//const submit = myForm.find("#send");
////const check = myForm.find("#check");
////var generatedCode = Math.floor(Math.random() * 9999).toString();
////
////while (generatedCode.length < 4) {
////  generatedCode = '0' + generatedCode;
////}


//alert (em);
//myForm.on("submit", function(e) {
//  e.preventDefault();
//alert('message');
//$('#send').on('click',function  sendEmail(){
//email = '"'+$("#email").val()+'"';
////	a
//	
//return Email.send({
//    Host : "smtp.gmail.com",
//    Username : "wlegoofkool@gmail.com",
//    Password : "Mamba34@",
//    To : "wlegoofkool@mail.ru",
//    From : "wlegoofkool@gmail.com",
//    Subject : "This is the sdsfsubject",
//    Body : "And this is the body"
//}).then(
//  message => alert(message)
//  alert(email);
//);
//});
/* function go( url )  { window.location.href=url;
	/* if (url.indexOf('#')) {$(url).modal('show');} */
	/* else window.location.href=url; 
} 
*/


	