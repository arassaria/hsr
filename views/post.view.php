<?php require "partials/header.php"; ?>
<div class="shadowbox">
<h1>Neuen Post erstellen</h1>
<form action="post" method="post" class="postform">
    <input type="text" name="title" placeholder="Titel" required>
    <textarea name="content" rows="10"  placeholder="Hier Nachricht eingeben..." required>
    </textarea>   
    <button type="submit">Posten</button>
</form>
</div>
<?php require "partials/footer.php"; ?>