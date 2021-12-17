<?php
$this_filename = $_SERVER['PHP_SELF'];
?>
<html>
<body>
<form action = "<?php echo $this_filename; ?>" method = "post">
Give car info: <br>
Register number: <br>
<input type="text" name="reg" size="10"><br>
Name: <br>
<input type="text" name="name" size="30"><br>
Quantity: <br>
<input type="text" name="quantity" size="10"><br>
Submit: <br>
<input type="submit" value="Submit"><br>
Clear: <br>
<input type="reset" value="Clear All">
</form>
<?php
include 'connect_to_shop.php';
if(isset($_POST['reg']))
{$m1 = $_POST['reg'];}
if(isset($_POST['name']))
$m2 = $_POST['name'];
if(isset($_POST['quantity']))
$m3 = $_POST['quantity'];
settype($m3, "int");
if(isset($_POST['reg'])){
$sql = "INSERT INTO `shop`(`registernumber`, `name`, `quantity`)VALUES('$m1','$m2','$m3')";

if(mysqli_query($connection,$sql)){
echo '<p> Data added </p>';
}
else{
echo '<p> Failed </p>';
}
}
?> 