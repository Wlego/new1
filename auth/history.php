<?PHP 
Error_Reporting(E_ALL & ~E_NOTICE);
session_start(); 

?>

<div id="content">


<input  type="button" class="btn btn-default str" value='загрузить еще'>


<?php
$_SESSION['loader']=0;
//
//function loadpage(){
////$CONNECT = mysqli_connect('localhost', 'f0541819_new1', 'vlqrH8G3', 'f0541819_new1'); 
//$CONNECT = mysqli_connect('localhost', 'root', '', 'new1');
//$querys=mysqli_query($CONNECT, "SELECT text FROM histori LIMIT ".$_SESSION['loader'].",2 ");
//
//if(!mysqli_num_rows($querys)){
//	if($_SESSION['loader']==0)exit('empy');
//	else exit('end');
//}
//
//$_SESSION['loader']+=2;
//while($rows=mysqli_fetch_assoc($querys)){
//	echo'<p>'.$rows['text'].'</p>';
//}
//}
//if ($_POST['admin']=='привет'){
//echo $_POST['admin'];
//loadpage();
//}
?> 

</div>

<script type="text/javascript"> 
//var admin='привет';   
        $(".str").click( function(){

            $.ajax({                
                url: '/new1/auth/loader1.php',
				type: 'POST',
				cache:false,
				data: {admin:'admin'},
				datatype: "html",
                success: function(data) {
                    //alert(data);
                    $('#content').append(data);

                }
            });
   });

</script>



<!--function load_page(){
	
	$.get('history',function(data){
	data=data.slice(0,data.indexOf('</header>'));
	data=data.slice(data.indexOf('<div id="main_soc_block">'),0);
		data=data.substr(data.indexOf('</header>'),data.indexOf('<div id="main_soc_block">'));
	if (data=='empty')
		{$('#content').text('история пуста');}
	else if(data!='end')	
		{$('#content').append(data);}	
	});
}

$(document).ready(function(){
	load_page();
}); 
 --> 


