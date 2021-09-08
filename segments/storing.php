<?php




//,'$region','$city','$wereda','$landholding','$pw','$ext'
//(name,landarea,landpreparation,sowing,fertilizer,wead,pest,insect,harvseting,storing,available_for_sale,ID_farmer) VALUES

//$set=mysqli_query($connect, $set);

include ("connect.php");
include ("far-account-head-copy.php");
include("header-copy.php");
include("farmer-side-copy.php");

//echo $sci;


if($_POST['avail']=='Yes'){
    $avail=true;
}
if($_POST['avail']=='No'){
    $avail=true;
}



$sci = $_POST['sci'];
$id=$_POST['id'];

$sql="UPDATE product SET available_for_sale='1'  WHERE ID='$id' ";

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
<form action="available-for-sell-handler.php?sci='$sci'" method="POST">
<?php

$sci = $_POST['sci'];

    $sql="SELECT post_harvesting,common_name FROM crop WHERE scientific_name='$sci'";
    
    $results=$connect->query($sql);

    $final=$results->fetch_assoc();
   
    echo "<p class='title'>".$final['common_name']."</p>";
    echo "<p class='sub-title'>Post Harvesting</p>";
    echo "<p class='content'>".$final['post_harvesting']."</p>";
    echo "<input type='hidden' value='$sci' name='sci'>";
    //echo "<a href=harvesting.php?sci='$sci'><input type='submit'></a>";
    echo "<button class='available-for-sell-handler.php?sci='$sci' >available for sale</button>";

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