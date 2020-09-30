<?php require "partials/header.php"; ?>
<div class="shadowbox">
    <h1>Login</h1>
    <?php if (array_key_exists('loginfail', $_SESSION)) {
      echo 'Benutzername oder Passwort falsch';
    }; ?>
    <br>
<form action="login" method="post" class="postform">
  <input type="text" name="username" value="" placeholder="Benutzername">
  <input type="password" name="password" value="" placeholder="Passwort">
  <button type="submit">Einloggen</button>
</form>
</div>
<?php require "partials/footer.php"; ?>