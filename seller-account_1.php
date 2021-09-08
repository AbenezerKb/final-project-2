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
<a href="notification.php">Notification</a>
</div>
<div class="Market-btn">
<a href="Market.php">Market</a>
</div>


<div class="logout"> <a href="logout.php">Log Out</a></div>
</aside>

</div>

<!-- Form -->
<div class="form-container">
<img src="img/icons/account.png">
<label class="name"> Name</label>
<form>
    <label class="name-lbl">Your Name</label>
    <input type="text" class="name-input">
    <label class="region-lbl">Region</label>
    <select class="region-input"> 
        <option>Oromia</option>
        <option>Amhara</option>
        <option>SNNP</option>
        <option>Tigray</option>
        <option>Gambela</option>
        <option>Afar</option>
        <option>Somali</option>
        <option>Benshangul</option>
        <option>Harar</option>
        <option>Sidama</option>
    </select>
    <label class="city-label">City</label>
    <input type="text" class="city-input">
    <label class="wereda-lbl">Wereda</label>
    <input type="text" class="wereda-input">    
    <label class="phone-label">Phone</label>
    <input type="text" class="phone-input">
    
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
