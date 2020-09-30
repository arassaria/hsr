<?php require 'partials/header.php'; ?>
<div class="shadowbox">
<h1>Alle Benutzer</h1>
<div class="grid">
    <div class="grid__row">
        <div class="grid__column">
            ID
        </div>
        <div class="grid__column">
            Benutzername
        </div>
        <div class="grid__column">
            E-Mail-Adresse 
        </div>
        <div class="grid__column">
            Security Key 
        </div>
    </div>
    <?php foreach($users as $user): ?>
    <div class="grid__row">
        <div class="grid__column">
            <?= $user->id; ?>
        </div>   
        <div class="grid__column">
            <?= $user->username; ?>
        </div>
        <div class="grid__column">
            <?= $user->email; ?>
        </div>
        <div class="grid__column">
            <?php if ($user->securitykey == 3) {
                echo 'Administrator';
            } elseif ($user->securitykey == 2) {
                echo 'Moderator';
            } elseif ($user->securitykey == 1) {
                echo 'Spieler';
            } else {
                echo 'Benutzer';
            } ; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<hr>
<?php if($_SESSION['securitykey'] == 3) {
echo '<form method="post" action="adminchange" class="postform">
<label>Update User-Securitykey</label>
    <input type="text" name="username" placeholder="Username">
    <select name="securitykey" id="securitykey">
        <option value="0">Benutzer</option>
        <option value="1">Spieler</option>
        <option value="2">Moderator</option>
    </select>
    <button type="submit">Submit</button>
</form>';
} else {
    echo '<form method="post" action="adminchange" class="postform">
    <label>Update User-Securitykey</label>
        <input type="text" name="username" placeholder="Username">
        <select name="securitykey" id="securitykey">
            <option value="0">Benutzer</option>
            <option value="1">Spieler</option>
        </select>
        <button type="submit">Submit</button>
    </form>';
}; ?>
<hr>
<form method="post" action="deleteuser" class="postform">
<label>Benutzer löschen</label>
    <input type="text" name="id" placeholder="Benutzer-ID">
    <button type="submit">Löschen</button>
</form>
<?php require 'partials/footer.php'; ?>