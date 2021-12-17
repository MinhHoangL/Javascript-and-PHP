<?php
include 'connect_to_shop.php';
print "Shop: <br>";
$sql = "SELECT * FROM shop";

$result = mysqli_query($connection, $sql);
print "<TABLE BORDER=1>";
while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
print "<tr><td>$row[0] </td><td>$row[1] </td><td>$row[2] </td></tr>";
}
print "</TABLE>\n"
?>
