

<?php
include("connect.php");
$sci = $_GET['sci'];
echo $sci;
$sql="UPDATE product SET available_for_sale='true' WHERE scientific_name='$sci'";

$results=$connect->query($sql);

$final=$results->fetch_assoc();


?>