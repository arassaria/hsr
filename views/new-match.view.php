<?php require 'partials/header.php'; ?>
<div class="shadowbox">
<h1>Match hinzufügen</h1>
<form method="post" action="new-match" class="postform">
    <label>Season:</label>
        <?php require 'forms/season.php'; ?>
    <label>Spieltag:</label>
        <?php require 'forms/spieltag.php'; ?>
    <label>Gegner:</label>
    <?php require 'forms/teams.php'; ?>
    <label>Liga:</label>
    <?php require 'forms/liga.php'; ?>
    <label>Heimspiel?</label>
    <select name="home" id="home">
        <option value="1">Heimspiel</option>
        <option value="0">Auswärtsspiel</option>
    </select>
    <label>Ergebnis Heim-Team:</label>
    <select name="result1" id="result1">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <label>Ergebnis Auswärts-Team:</label>
    <select name="result2" id="result2">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <button type="submit">Eintragen</button>
</form>
</div>
<?php require 'partials/footer.php'; ?>