<?php require "partials/header.php"; ?>
<div class="shadowbox">
<h1>Unsere Matchergebnisse</h1>
<form method="post" action="results" class="postform">
    <select name="showseason" id="showseason">
        <optgroup label="ODS">
            <option value="ods1">Season 1</option>
            <option value="ods2">Season 2</option>
        </optgroup>
        <optgroup label="ODA">
            <option value="oda1">Season 1</option>
            <option value="oda2">Season 2</option>
        </optgroup>
    </select>
    <button type="submit">Anzeigen</button>
</form>
<?php require "seasons/ods1.php"; ?>
<br>
<hr>
<?php require "seasons/ods2.php"; ?>
<br>
<hr>
<?php require "seasons/oda1.php"; ?>
<br>
<hr>
<?php require "seasons/oda2.php"; ?>
<br>
</div>
<?php require "partials/footer.php"; ?>