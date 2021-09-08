<?php




//,'$region','$city','$wereda','$landholding','$pw','$ext'
//(name,landarea,landpreparation,sowing,fertilizer,wead,pest,insect,harvseting,storing,available_for_sale,ID_farmer) VALUES

//$set=mysqli_query($connect, $set);

include ("connect.php");
include ("far-account-head-copy.php");
include("header-copy.php");
include("farmer-side-copy.php");
$sci = $_POST['sci'];
$id=$_POST['id'];
$harv=$_POST['choice'];
//if(isset($_POST['harv-1']))
//{
 //   $harv=$_POST['harv-1'];
//}
//if(isset($_POST['harv-2']))
//{
  //  $harv=$_POST['harv-2'];
//}
//echo $sci;

$sql="UPDATE product SET harvesting='$harv'  WHERE ID='$id' ";

$results=$connect->query($sql);
?>


<form action="storing.php" method="POST">
<?php



    $sql="SELECT post_harvesting,common_name FROM crop WHERE scientific_name='$sci'";
    
    $results=$connect->query($sql);

    $final=$results->fetch_assoc();
   
    echo "<p class='title'>".$final['common_name']."</p>";
    echo "<p class='sub-title'>Post Harvesting</p>";
    echo "<p class='content'>".$final['post_harvesting']."</p>";
    echo "<input type='hidden' value='$sci' name='sci'>";
    echo "<h3 id='h3'>Available For Sale?</h3>";
    echo "<input type='radio' id='Choice1' name='avail' value='yes'>";
    echo "<label for='Choice1' class='lbl-1'>Yes</label>";

    echo "<input type='radio' id='Choice2' name='avail' value='no'>";
    echo "<label for='Choice2' class='lbl-2'>No</label>";
    echo "<input type='hidden' value='$id' name='id'>";    
    echo "<input type='hidden' value='$sci' name='sci'>";
    echo "<input type='submit' class='submit'> ";
    //echo "<a><button class='storing.php' >Post Harvesting</button></a>";

?>
</form>

<style>
    
.lbl-1{

    top: 50vh;
left:57vw;

position: absolute;
}

.lbl-2{
    top: 50vh;
left:65vw;

position: absolute;

}


#Choice1{

    top: 50vh;
    left:60vw;

    position: absolute;
    font-size:27px;
    font-family:'century gothic';
}

#Choice2{

    top: 50vh;
left:68vw;

position: absolute;
font-size:27px;
font-family:'century gothic';
}

#h3{
    top: 50vh;
    left:35vw;
    
    font-size:22px;
    font-family:'century gothic';
    position: absolute;

}


.submit{
    top: 58vh;
    left:60vw;
    width:100px;
    position: absolute;
    background-color:#7b5ffe;
    border-radius:5px;
}

.submit-2{
    top: 58vh;
    left:40vw;
    width:60px;
    position: absolute;
    background-color:#7b5ffe;
    border-radius:5px;
}

.title{
    text-align:center;
    top: 11vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.sub-title{
    text-align:center;
    top: 15vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.content{
    
    text-align:center;
    width:60vw;
    top: 22vh;
    left:25vw;
    position: absolute;
    font-size:18px;
    font-family:'century gothic';
}

</style>