<!DOCTYPE html>
<html lang="en">
<?php 

include("segments/moalr-head.php");

?>
<body>
    

<?php 

include("segments/header.php");


?>


<!-- Side -->
<?php
include("segments/moalr-side.php");
?>
<!-- Side ends-->

<!-- Form -->
<div class="form-container">
<img src="img/icons/account.png">
<label class="name"> Name</label>
<form action="segments/moalr-crop-handler.php" method="POST">
    <label class="scientific-name-lbl">Scientific Name</label>
    <input type="text" class="scientific-name-input"   name="sci-name">
    <label class="common-name-lbl">Common Name</label>
    <input type="text" class="common-name-input"  name="common-name">
    <label class="suitable-lbl">Suitable Area</label>
    <textarea class="suitable-input" rows="5" name="suitable"> </textarea>
    <label class="production-lbl">Production methods</label>
    <textarea class="production-input" rows="5" name="product"> </textarea>
    <label class="sowing-lbl">Sowing season</label>
    <textarea class="sowing-input" rows="5" name="sowing"> </textarea>
    <label class="area-lbl">Sowing size</label>
    <textarea class="area-input" rows="5" name="area">  </textarea>
    <label class="method-lbl">Fertilizer method</label>
    <textarea class="method-input" rows="5" name="method"> </textarea>
    <label class="cropping-lbl">Cropping system</label>
    <textarea class="cropping-input" rows="5" name="fert">  </textarea>
    <label class="protection-lbl">Protection system</label>
    <textarea class="protection-input" rows="5" name="cropping">  </textarea>
    <label class="post-lbl">Post Harvesting system</label>
    <textarea class="post-input" rows="5" name="post"> </textarea>
    <label class="harvesting-lbl">Harvesting</label>
    <textarea class="harvesting-input" rows="5" name="harvest"> </textarea>
    <label class="Id-lbl">ID</label>
    <textarea class="Id-input" rows="5" name="Id-input">  </textarea>
        
    <input type="submit" class="submit">
</form>


<?php 
  
  include("segments/footer.php");
  
  ?>
</body>
</html>