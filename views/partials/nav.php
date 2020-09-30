<div class="sidebar">
  <div class="sidebar-wrapper">
    <nav>
      <p><a href="/HSR/" class="expand">Home</a></p>
    <hr>
<form action="player" method="post">
  <label for="">Spielersuche</label><br>
  <input type="text" name="player" value="" class="input"><br>
  <button type="submit">Suchen</button>
</form>
    <hr>
      <p><a href="/HSR/ods" class="expand">HSR Panthera</a></p>
      <hr>
      <p><a href="/HSR/oda" class="expand">Panthera Academy</a></p>
      <hr>
      <p><a href="/HSR/ods-season" class="expand">Ergebnisse</a></p>
      <hr>
      <p><a href="/HSR/media" class="expand">Media</a></p>
      <hr>
      <p><a href="https://www.dach-esports.de/" target="new" class="expand">Dach eSports</a></p>
      <hr>
      <p><a href="contact" class="expand">Kontakt</a></p>
      <hr>
      <?php if (!empty($_SESSION['username'])): ?>
        <p><a href="jerseys" class="expand">Jersey-Bestellung</a></p>
        <hr>
        <?php endif; ?>
        <?php if (empty($_SESSION['username'])): ?>
          <p><a href="login" class="expand">Anmelden</a></p>
          <hr>
          <p><a href="signup" class="expand">Registrieren</a></p>
          <?php else: ?>
            <p><a href="users" class="expand">Mein Profil</a></p>
            <hr>
            <p><a href="logout" class="expand">Abmelden</a></p>
            <?php endif; ?>
            <hr>
          </nav>
  </div>
</div>