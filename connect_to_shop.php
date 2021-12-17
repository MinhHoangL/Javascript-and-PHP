<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	echo '<p> Can not connect </p>';
	exit();
}

if(!mysqli_select_db($connection, 'Shop')){
	exit('Can not choose database');
}
else 
	print 'Connected'; 
?>