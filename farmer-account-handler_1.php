<?php


include ("connect.php");

$name = $_POST['name'];
$region = $_POST['region'];
$city = $_POST['city'];
$wereda = $_POST['wereda'];
$landholding = $_POST['land'];
$phone = $_POST['phone'];
$ext = $_POST['ext'];
$pw = $_POST['pw'];



$set = "INSERT INTO farmer(name,phone,region,city,wereda,landholding,password,ID_expert) VALUES('$name','$phone','$region','$city','$wereda','$landholding','$pw','$ext')";


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
var url= "../index.php";

setTimeout(function(){window.location = url;}, 4000);

</script>


