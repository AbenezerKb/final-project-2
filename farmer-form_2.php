<!-- Form -->
<div class="form-container">
<img src="img/icons/account.png">
<label class="name"> Name</label>
<form action="segments/farmer-account-handler.php" method="POST">
    <label class="name-lbl">Your Name</label>
    <input type="text" class="name-input" name="name">
    <label class="region-lbl">Region</label>
    <select class="region-input" name="region"> 
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
    <input type="text" class="city-input" name="city">
    <label class="wereda-lbl">Wereda</label>
    <input type="text" class="wereda-input" name="wereda">
    <label class="ext-lbl">Extension Worker ID</label>
    <input type="text" class="ext-input" name="ext">
    <label class="phone-label">Phone</label>
    <input type="text" class="phone-input" name="phone">
    <label class="land-lbl">Land Holding(In Hectar)</label>
    <input class="land-input" type="text" name="land">
    <label class="pw-lbl">New Password</label>
    <input type="password" class="pw-input" name="pw">
    <label class="new-pw-lbl">Confirm Password</label>
    <input class="new-pw-input" type="password">
    <input type="submit" class="submit">
</form>


