
	
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
		
	/* вычисляем и создаем массив первых элементов групп одинаковых элементов */
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

	/* alert( str); */
	$.ajax(

	{
		url : url,
		type: 'POST',
		data: name /* + '_f=1' */ + str,
		cache: false,
		success:function( result ) {
			/* alert( result); */
			
			var obj = result;
			
			if (obj.indexOf('#')!=-1) $(obj).modal('show');
			else if (obj.indexOf('.php')!=-1) window.location.href=obj;
			else alert( obj );
	}
	}

	);

}

/* изменения иконок при валидации данных формы */

$('.reg').on('click',function valid_form(){
	/* alert('1'); */
	$('form .glyphicon-remove').remove();
	if ($('#lastName').val()==""){$('div.form-group').eq(1).addClass('has-error has-feedback');
		$('#lastName').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
		
	if ($('#firstName').val()==""){$('div.form-group').eq(2).addClass('has-error has-feedback');
		$('#firstName').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
		
	if ($('#fatherName').val()==""){$('div.form-group').eq(3).addClass('has-error has-feedback');
		$('#fatherName').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
	
	if ($('#phoneNumber').val()==""){$('div.form-group').eq(7).addClass('has-error has-feedback');
		$('#phoneNumber').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
		
	if ($('#postalAddress').val()==""){$('div.form-group').eq(8).addClass('has-error has-feedback');
		$('#postalAddress').after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');}
		
	
	if ($('#lastName').val()!=""){$('div.form-group').eq(1).removeClass('has-error has-feedback');}
	if ($('#firstName').val()!=""){$('div.form-group').eq(2).removeClass('has-error has-feedback');}
	if ($('#fatherName').val()!=""){$('div.form-group').eq(3).removeClass('has-error has-feedback');}
	if ($('#phoneNumber').val()!=""){$('div.form-group').eq(7).removeClass('has-error has-feedback');}
	if ($('#postalAddress').val()!=""){$('div.form-group').eq(8).removeClass('has-error has-feedback');}
});

/* function go( url )  { window.location.href=url;
	/* if (url.indexOf('#')) {$(url).modal('show');} */
	/* else window.location.href=url; 
} 
*/


	