<?php require "partials/header.php"; ?>
<div class="shadowbox">
    <h1>Anmeldung</h1>
<form method="post" action="signup" class="postform">
  <input type="email" name="email" value="" placeholder="E-Mail-Adresse" required>
  <input type="text" name="user" value="" placeholder="Benutzername" required>
  <input type="password" name="password" value="" placeholder="Passwort" required>
  <button type="submit">Registrieren</button>
</form>
</div>
<?php require "partials/footer.php"; ?>