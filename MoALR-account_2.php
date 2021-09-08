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
<div>

<aside>

<div class="account-btn">
<a href="account.php">Account</a>
</div>
<div class="notification-btn">
<a href="ftc.php">FTC</a>
</div>
<div class="Market-btn">
<a href="announcement.php">Announcement</a>
</div>

<div class="crop-btn">
<a href="crop.php">Crop</a>
</div>

<div class="logout"> <a href="logout.php">Log Out</a></div>
</aside>

</div>

<!-- Form -->
<div class="form-container">
<img src="img/icons/account.png">
<label class="name"> Name</label>
<form>
   
   
    <label class="region-lbl">UserName</label>
    <input type="text" class="region-input">
      
    <label class="phone-label">Phone</label>
    <input type="text" class="phone-input">
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
    <input type="password" class="pw-input">
    <label class="new-pw-lbl">Confirm Password</label>
    <input class="new-pw-input" type="password">
    <input type="submit" class="submit">
</form>

</div>

<?php 
  
  include("segments/footer.php");
  
  ?>
</body>
</html>
