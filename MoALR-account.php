<!DOCTYPE html>
<html lang="en">
<?php 

include("segments/far-account-head.php");

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
<form action="segments/moalr-account-handler.php" method="POST">
   
   
    <label class="region-lbl">UserName</label>
    <input type="text" class="region-input" name="un">
      
    <label class="phone-label">Phone</label>
    <input type="text" class="phone-input" name="phone">
    <style>

.phone-label{
    grid-column: 1/2;
    grid-row: 1/2;
    position: relative;
    top: 10px;
    left: 30px;
}

.phone-input{
    grid-column: 1/2;
    grid-row: 2/3;
    height:30px;
    border-radius: 5px;
    border-style: none;
    border-color: white;
    width: 300px;
    position: relative;
    left: 30px;
}

    </style>
    <label class="pw-lbl">New Password</label>
    <input type="password" class="pw-input" name="pw">
    <label class="new-pw-lbl">Confirm Password</label>
    <input class="new-pw-input" type="password" name="new-pw">
    <input type="submit" class="submit">
</form>

</div>

<?php 
  
  include("segments/footer.php");
  
  ?>
</body>
</html>
