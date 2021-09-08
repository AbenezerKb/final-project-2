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
$wead= $_POST['wead'];
$dis="";
$ins="";

if(isset($_POST['ch1'])){
$dis.=" ".$_POST['ch1'];
}

if(isset($_POST['ch2'])){
$dis.=" ".$_POST['ch2'];
}

if(isset($_POST['ch3'])){
$dis.=" ".$_POST['ch3'];
}

if(isset($_POST['ch4'])){
$dis.=" ".$_POST['ch4'];
}
    
if(isset($_POST['ch5'])){
$ins.=" ".$_POST['ch5'];
}
    
if(isset($_POST['ch6'])){
$ins.=" ".$_POST['ch6'];
}

if(isset($_POST['ch7'])){
$ins.=" ".$_POST['ch7'];
}
        
if(isset($_POST['ch8'])){
$ins.=" ".$_POST['ch8'];
}

$sql="UPDATE product SET wead='$wead', pest='$dis', insect='$ins'  WHERE ID='$id' ";

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
<form action="harvesting.php" method="POST">
<?php



    $sql="SELECT harvesting,common_name FROM crop WHERE scientific_name='$sci'";
    
    $results=$connect->query($sql);

    $final=$results->fetch_assoc();
   
    echo "<p class='title'>".$final['common_name']."</p>";
    echo "<p class='sub-title'>Harvesting</p>";
    echo "<p class='content'>".$final['harvesting']."</p>";

    echo "<div class='txt'> Have you used combiner?</div>";

    

    echo "<input type='radio' id='Choice1' name='choice' value='yes'>";
    echo "<label for='Choice1' class='lbl-1'>Yes</label>";

    echo "<input type='radio' id='Choice2' name='choice' value='no'>";
    echo "<label for='Choice2' class='lbl-2'>No</label>";

    echo "<input type='hidden' value='$id' name='id'>";    
    echo "<input type='hidden' value='$sci' name='sci'>";
    echo "<input type='submit' class='submit'> ";
    

?>
</form>

<style>

 .submit{

    position:absolute;
    top:53vh;
    left:65vh;
 }   

.txt{
    top: 40vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
}


.radio-lbl-1{

top: 40vh;
left:56vw;
width:40vw;
position: absolute;
font-size:27px;
font-family:'century gothic';
}

.radio-lbl-2{

top: 40vh;
left:64vw;
width:40vw;
position: absolute;
font-size:27px;
font-family:'century gothic';
}


#Choice1{

    top: 42vh;
    left:60vw;

    position: absolute;
    font-size:27px;
    font-family:'century gothic';
}

#Choice2{

top: 42vh;
left:68vw;

position: absolute;
font-size:27px;
font-family:'century gothic';
}

.lbl-1{

    top: 42vh;
left:57vw;

position: absolute;
}

.lbl-2{
    top: 42vh;
left:65vw;

position: absolute;

}




.title{
    text-align:center;
    top: 10vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.sub-title{
    text-align:center;
    top: 13vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.content{
    
    text-align:center;
    width:60vw;
    top: 20vh;
    left:25vw;
    position: absolute;
    font-size:18px;
    font-family:'century gothic';
}

</style>