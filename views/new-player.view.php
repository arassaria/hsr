<?php require 'partials/header.php'; ?>
<div class="shadowbox">
<h1>Neuen Spieler anlegen</h1>
<form method="post" action="new-player" class="postform">
    <label>Spielername</label>
    <input type="text" name="name" placeholder="Name" required>
    <label>Spielernummer</label>
    <input type="text" name="nummer" placeholder="#XX">
    <label>Rolle</label>
    <?php require 'forms/roles.php'; ?>
    <label>Liga</label>
    <select name="ods" id="ods">
        <option value="1">Overwatch DACH Series</option>
        <option value="2">Overwatch DACH Series, ehemals Overwatch DACH Academy</option>
        <option value="3">Overwatch DACH Academy</option>
    </select>
    <?php require 'forms/playedseasons.php'; ?>
    <label>Peak SR</label>
    <input type="text" name="peak" placeholder="Peak">
    <label>Current Team</label>
    <input type="text" name="team" placeholder="Current Team">
    <label>Signature Heroes</label>
    <select name="signature1" id="signature1">
        <?php require 'forms/heroes.php'; ?>
    </select>
    <select name="signature2" id="signature2">
        <?php require 'forms/heroes.php'; ?>
    </select>
    <select name="signature3" id="signature3">
        <?php require 'forms/heroes.php'; ?>
    </select>
    <button type="submit">Eintragen</submit>
</form>
</div>
<?php require 'partials/footer.php'; ?>