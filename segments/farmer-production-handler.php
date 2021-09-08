<?php


include ("connect.php");
include ("far-account-head-copy.php");
include("header-copy.php");
include("farmer-side-copy.php");
$hect = $_POST['hect'];
$crop = $_POST['crop'];

$set = "INSERT INTO product(name,landarea)VALUES('$crop','$hect')";
//,'$region','$city','$wereda','$landholding','$pw','$ext'
//(name,landarea,landpreparation,sowing,fertilizer,wead,pest,insect,harvseting,storing,available_for_sale,ID_farmer) VALUES

$set=mysqli_query($connect, $set);



$sql="SELECT ID FROM product WHERE ID=(SELECT max(ID) FROM product)";

$results=$connect->query($sql);

$final=$results->fetch_assoc();

$id= $final['ID'];
?>



<style>

h3{

font-size:30px;
font-family:'century gothic';
text-align:center;
position: absolute;
top:10vh;
left:30vw;
color:#ff9a00;

}


</style>

<form action="land.php" method="POST">
<?php
    
    $sql="SELECT suitable_area,common_name FROM crop WHERE scientific_name='$crop'";
    
    $results=$connect->query($sql);

    $final=$results->fetch_assoc();
   
    echo "<p class='title'>".$final['common_name']."</p>";
    echo "<p class='sub-title'>Suitable Area</p>";
    echo "<p class='content'>".$final['suitable_area']."</p>";
    echo "<h4 class='label'>Number of plow</h4>";
    echo "<input type='number' name='plow'  class='plow' > " ;

    echo "<input type='hidden' value='$crop' name='sci'>";
    echo "<input type='hidden' value='$id' name='id'>";
    echo "<input type='submit' class='submit' >";

?>
</form>
<style>
.submit{
    text-align:center;
    top: 60vh;
    left:40vw;
    width:10vw;
    position: absolute;
    font-size:20px;
    font-family:'century gothic';   

}
.plow{

    text-align:center;
    top: 54vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:20px;
    font-family:'century gothic';   
}

.label{

    text-align:center;
    top: 50vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:20px;
    font-family:'century gothic';

}
.title{
    text-align:center;
    top: 8vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.sub-title{
    text-align:center;
    top: 11vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.content{
    
    text-align:center;
    width:60vw;
    top: 15vh;
    left:25vw;
    position: absolute;
    font-size:18px;
    font-family:'century gothic';
}

</style>