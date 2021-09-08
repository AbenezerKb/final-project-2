<?php


include ("connect.php");

$un = $_POST['un'];
$phone = $_POST['phone'];
$pw = $_POST['pw'];
$new = $_POST['new-pw'];
//$sowing = $_POST['sowing'];
//$area = $_POST['area'];
//$method = $_POST['method'];
//$fert = $_POST['fert'];
//$cropping=$_POST['cropping'];
//$production=$_POST['post'];
//$harvest=$_POST['harvest'];
//$post=$_POST['Id-input'];
//$id=$_POST['Id-input'];



$set = "INSERT INTO moalr(username,password,phone) VALUES('$un','$pw','$phone')";


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


