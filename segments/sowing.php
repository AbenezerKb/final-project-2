<?php




//,'$region','$city','$wereda','$landholding','$pw','$ext'
//(name,landarea,landpreparation,sowing,fertilizer,wead,pest,insect,harvseting,storing,available_for_sale,ID_farmer) VALUES

//$set=mysqli_query($connect, $set);

include ("connect.php");
include ("far-account-head-copy.php");
include("header-copy.php");
include("farmer-side-copy.php");

$id=$_POST['id'];
$plow=$_POST['sow'];
$sci = $_POST['sci'];

$sql="UPDATE product SET sowing='$plow' WHERE ID='$id' ";

$results=$connect->query($sql);
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
<form action="fertilizer.php" method="POST">
<?php



    $sql="SELECT fertilizer_method,common_name FROM crop WHERE scientific_name='$sci'";
    
    $results=$connect->query($sql);

    $final=$results->fetch_assoc();
   
    echo "<p class='title'>".$final['common_name']."</p>";
    echo "<p class='sub-title'>Fertilizer</p>";
    echo "<p class='content'>".$final['fertilizer_method']."</p>";
    echo "<h4 class='label'>Fertilizer in kilogram per hectare</h4>";

    echo "<input type='number' name='fert1'  class='fert1' value='NPS' > " ;
    echo "<label for='fert1'>NPS</label>";
    echo "<input type='number' name='fert2'  class='fert2' value='Urea' > " ;
    echo "<label for='fert2'>Urea</label>";
    echo "<input type='hidden' value='$sci' name='sci'>";
    echo "<input type='hidden' value='$id' name='id'>";
    echo "<input type='submit' class='submit' >";

?>
</form>

<style>

.title{
    text-align:center;
    top: 30vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.sub-title{
    text-align:center;
    top: 33vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.content{
    
    text-align:center;
    width:60vw;
    top: 40vh;
    left:25vw;
    position: absolute;
    font-size:18px;
    font-family:'century gothic';
}

</style>