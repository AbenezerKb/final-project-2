<!-- Form -->
<div class="form-container">
<img src="img/icons/account.png" class="img">
<label class="name"> Name</label>
<form action="segments/farmer-production-handler.php" method="POST">
    
    <label class="crop-lbl">Crop Name</label>
    
    <select class="crop-input" name="crop"> 
    <?php
    include ("segments/connect.php");
    $sql="SELECT scientific_name,common_name FROM crop";
    $results=$connect->query($sql);

    while($final=$results->fetch_assoc()){
    echo $final['scientific_name'];
        echo  "<option value=".$final['scientific_name'].">".$final['common_name']."</option>";
    }
        ?>
      
    </select>
    <label class='prod'>Proudctions</label>

    <?php
    /*
    $sql="SELECT * FROM product WHERE ";
    $results=$connect->query($sql);

    while($final=$results->fetch_assoc()){
    echo $final['scientific_name'];
        echo  "<option value=".$final['scientific_name'].">".$final['common_name']."</option>";
    }
    */
        ?>
<style>

.prod{
position: absolute;
top: 10px;
left: 15vh;
font-size:18px;
}

.img{

    left: 40vh;    
}

.name{
    left: 60vh;    
}

.submit{
    left: 60vh;    
}

    .crop-lbl{

grid-column: 1/2;
grid-row: 1/2;
position: relative;
top: 10px;
left: 60vh;
}

.crop-input{
grid-column: 1/2;
grid-row: 2/3;
height:30px;
border-radius: 5px;
border-style: none;
border-color: white;
width: 300px;
position: relative;
left: 60vh;
}

.name-lbl{
grid-column: 1/2;
grid-row: 3/4;
position: relative;
top: 10px;
left: 60vh;
}

.name-input{
grid-column: 1/2;
grid-row: 4/5;
height:30px;
border-radius: 5px;
border-style: none;
border-color: white;
width: 300px;
position: relative;
left: 60vh;
}
</style>
    <label class="name-lbl">Production Area(in hectar)</label>
    <input type="number" class="name-input" name="hect">
    <input type="hidden" name="" >
    <input type="submit" class="submit">
</form>


