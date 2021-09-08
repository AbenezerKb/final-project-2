<?php




//,'$region','$city','$wereda','$landholding','$pw','$ext'
//(name,landarea,landpreparation,sowing,fertilizer,wead,pest,insect,harvseting,storing,available_for_sale,ID_farmer) VALUES

//$set=mysqli_query($connect, $set);

include ("connect.php");
include ("far-account-head-copy.php");
include("header-copy.php");
include("farmer-side-copy.php");


$id=$_POST['id'];
$fert1=$_POST['fert1'];
$fert2 = $_POST['fert2'];
$sci = $_POST['sci'];
$f=$fert1." ".$fert2;

$sql="UPDATE product SET fertilizer='$f'  WHERE ID='$id' ";

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
<form action="threats.php" method="POST">
<?php



    $sql="SELECT wead,disease,diseases,insect,common_name FROM crop WHERE scientific_name='$sci'";
    
    $results=$connect->query($sql);

    $final=$results->fetch_assoc();
   
    echo "<p class='title'>111111111".$final['common_name']."</p>";
    echo "<p class='sub-title-1'>111111111111Wead</p>";
    echo "<p class='content-1'>1111111111111".$final['wead']."</p>";
    echo "<p class='sub-title-2'>2222222222Disease</p>";
    echo "<p class='content-2'>2222222222222".$final['disease']."</p>";
    echo "<p class='sub-title-3'>333333333333Insect</p>";
    echo "<p class='content-3'>33333333333333".$final['insect']."</p>";
   
    echo "<input type='number' name='wead'  class='wead'  > " ;
    echo "<label for='wead' class='wead-label'>interval for Weading in days</label>";

?>
   <h4 class='lbl-1' >Diseases</h4>
   
    <?php
  //include ("connect.php");
    $dis="SELECT diseases FROM crop";

    $results=$connect->query($dis);

    
    //$results=$connect->query($sql);

    $final=$results->fetch_assoc();

        $d=explode(",",$final['diseases']);
        foreach($d as $i ){
        //echo $i;
      //  echo  "<option value=".$i.">".$i."</option>";
    }
        ?>
         <div class="h2"> </div>
    
<?php

//<select class="insects" name="insects" > 
    $sql="SELECT diseases,insects FROM crop WHERE scientific_name='$sci'";
    $results=$connect->query($sql);

    
    //$results=$connect->query($sql);

    $final=$results->fetch_assoc();

        $d=explode(",",$final['diseases']);
        
        //echo $d['0'];
        echo  "<input type='checkbox' name='ch5' class='ch5' value='"."55".$d['0']."'>";
        echo "<label for='ch5' class='ch5-lbl'> 55". $d['0']."</label><br>";
        echo  "<input type='checkbox' name='ch6' class='ch6' value='"."66".$d['1']."'>";
        echo "<label for='ch6' class='ch6-lbl'> 66". $d['1']."</label><br>";
        echo  "<input type='checkbox' name='ch7' class='ch7' value='"."77".$d['2']."'>";
        echo "<label for='ch7' class='ch7-lbl'> 77". $d['2']."</label><br>";
        echo  "<input type='checkbox' name='ch8' class='ch8' value='"."88".$d['3']."'>";
        echo "<label for='ch8' class='ch8-lbl'> 88". $d['3']."</label><br>";
    //}

    //</select>

?>

<h4 class='lbl-2'>Insectsssss</h4>

   
<?php

//<select class="insects" name="insects" > 
  
        $d=explode(",",$final['diseases']);
        
        //echo $d['0'];
        echo  "<input type='checkbox' name='ch1' class='ch1' value='"."11".$d['0']."'>";
        echo "<label for='ch1' class='ch1-lbl'> 11". $d['0']."</label><br>";
        echo  "<input type='checkbox' name='ch2' class='ch2' value='"."22".$d['1']."'>";
        echo "<label for='ch2' class='ch2-lbl'> 22". $d['1']."</label><br>";
        echo  "<input type='checkbox' name='ch3' class='ch3' value='"."33".$d['2']."'>";
        echo "<label for='ch3' class='ch3-lbl'> 33". $d['2']."</label><br>";
        echo  "<input type='checkbox' name='ch4' class='ch4' value='"."44".$d['3']."'>";
        echo "<label for='ch4' class='ch4-lbl'> 44". $d['3']."</label><br>";
        echo "<input type='hidden' value='$id' name='id'>";
        echo "<input type='hidden' value='$sci' name='sci'>";
    //}

    //</select>

?>



<style>

.lbl-1{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 30vw;
    top:98vh;

}

.lbl-2{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 30vw;
    top:126vh;

}


.ch1{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:102vh;
}

.ch2{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:108vh;
}

.ch3{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:114vh;
}

.ch4{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:120vh;
}


.ch5{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:131vh;
}

.ch6{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:137vh;
}

.ch7{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:143vh;
}

.ch8{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 43vw;
    top:149vh;
}


.ch1-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:102vh;
}

.ch2-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:108vh;
}

.ch3-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:114vh;
}

.ch4-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:120vh;
}

.ch5-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:131vh;
}

.ch6-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:137vh;
}

.ch7-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:143vh;
}

.ch8-lbl{
    height:10px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 10px;
    position: absolute;
    left: 35vw;
    top:149vh;
}


.wead{

    height:30px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 300px;
    position: absolute;
    left: 40vw;
    top:90vh;
}

    .diseases{

        height:30px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 300px;
    position: absolute;
    left: 40vw;
    top:65vh;
    }


    .insects{

height:30px;
border-radius: 5px;
//border-style: none;
border-color: grey;
width: 300px;
position: absolute;
top:70vh;
    left: 40vw;

}

.diseases-label{
    height:30px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 300px;
    position: absolute;
    left: 24vw;
    top:65vh;
}

.wead-label{
    height:30px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 300px;
    position: absolute;
    left: 24vw;
    top:90vh;
}

.submit{
    position: absolute;
    left: 24vw;
    top:140vh;
    bottom:10vh;
    
}



.insects-label{
    height:30px;
    border-radius: 5px;
    //border-style: none;
    border-color: grey;
    width: 300px;
    position: absolute;
    left: 24vw;
    top:70vh;
}
</style>

<?php
    //echo "<input type='number' name='disease'  class='disease'  > " ;
 //   echo "<label for='diseases' class='diseases-label'>Diseases</label>";

    //echo "<input type='number' name='wead'  class='wead' > " ;
 //   echo "<label for='insects' class='insects-label'>Insects</label>";
 //   echo "    <select class='wead' name='wead'> ";
/*
    $sql="SELECT wead FROM crop WHERE scientific_name='$sci'";
    $results=$connect->query($sql);

    while($final=$results->fetch_assoc()){
    echo $final['scientific_name'];
        echo  "<option value=".$final['scientific_name'].">".$final['common_name']."</option>";
    }
        
      
    echo "</select>";

   // echo "<input type='number' name='fert2'  class='fert2' value='Urea' > " ;
   echo "    <select class='insect' name='insect'> ";

   $sql="SELECT insect FROM crop WHERE scientific_name='$sci'";
   $results=$connect->query($sql);

   while($final=$results->fetch_assoc()){
   echo $final['scientific_name'];
       echo  "<option value=".$final['scientific_name'].">".$final['common_name']."</option>";
   }
       
     
   echo "</select>";

    echo "<input type='number' name='wead'  class='wead' value='wead' > " ;
    echo "<label for='number'>in</label>";
    echo "<input type='number' name='fert1'  class='fert1' value='NPS' > " ;
    echo "<label for='fert1'>interval for Weading in days</label>";
    echo "<input type='hidden' value='$sci' name='sci'>";
    echo "<input type='hidden' value='$id' name='id'>";
    */
    echo "<input type='submit' class='submit' >";
    

?>
</form>

<style>

.title{
    text-align:center;
    top: 3vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.sub-title-1{
    text-align:center;
    top: 7vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.content-1{
    
    text-align:center;
    width:60vw;
    top: 13vh;
    left:25vw;
    position: absolute;
    font-size:18px;
    font-family:'century gothic';
}



.sub-title-2{
    text-align:center;
    top: 30vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.content-2{
    
    text-align:center;
    width:55vw;
    top: 36vh;
    left:25vw;
    position: absolute;
    font-size:18px;
    font-family:'century gothic';
}

.sub-title-3{
    text-align:center;
    top: 61vh;
    left:30vw;
    width:40vw;
    position: absolute;
    font-size:27px;
    font-family:'century gothic';
    
}

.content-3{
    
    text-align:center;
    width:60vw;
    top: 67vh;
    left:25vw;
    position: absolute;
    font-size:18px;
    font-family:'century gothic';
}
</style>