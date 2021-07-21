
<?
session_start();

$CONNECT = mysqli_connect('localhost', 'root', '', 'new1');

//$_SESSION['loader']=0;
$querys=mysqli_query($CONNECT, "SELECT text FROM histori LIMIT ".$_SESSION['loader'].",2 ");

	if(!mysqli_num_rows($querys)){
		if($_SESSION['loader']==0)exit('empy');
		else exit('end');
	}
	
$_SESSION['loader']+=2;
while($rows=mysqli_fetch_assoc($querys)){	
	echo'<p>'.$rows['text'].'</p>';	
}
?>