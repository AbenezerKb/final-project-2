<?php


include ("connect.php");

$sciname = $_POST['sci-name'];
$common = $_POST['common-name'];
$suitable = $_POST['suitable'];
$product = $_POST['product'];
$sowing = $_POST['sowing'];
$area = $_POST['area'];
$method = $_POST['method'];
$fert = $_POST['fert'];
$cropping=$_POST['cropping'];
$production=$_POST['post'];
$harvest=$_POST['harvest'];
$post=$_POST['Id-input'];
//$id=$_POST['Id-input'];



$set = "INSERT INTO crop(scientific_name,common_name,suitable_area,production_methods,sowing_season,sowing_size,fertilizer_method,cropping_system,protection_system,post_harvesting,harvesting,ID_moalr) VALUES('$sciname','$common','$suitable','$production','$sowing','$area','$method','$fert','$cropping','$harvest','$post','$product')";


$set=mysqli_query($connect, $set);


?>

<h3  >
Successfully registered!
</h3>

<h4>
Redirecting to the home page
</h4>


<style>

h3{

font-size:30px;
font-family:'century gothic';
text-align:center;
position: absolute;
top:40vh;
left:30vw;
color:#ff9a00;

}

h4{
    font-size:20px;
font-family:'century gothic';
text-align:center;
position: absolute;
top:50vh;
left:30vw;
color:#ff9a00;
}

</style>

<script>
var url= "../moalr-account.php";

setTimeout(function(){window.location = url;}, 4000);

</script>


