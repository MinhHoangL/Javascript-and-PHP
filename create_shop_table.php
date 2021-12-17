<?php
include 'connect_to_shop.php';

$sql = "CREATE TABLE shop (
	registernumber varchar(10),
	name varchar(30),
	quantity int
);";

if(mysqli_query($connection, $sql)){
	echo '<p> Table create </p>';
}
else
{
	echo '<p> Failed: check the sql </p>';
	echo $sql;
}

?>
