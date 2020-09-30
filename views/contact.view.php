<?php require "partials/header.php"; ?>
<div class="shadowbox">
<h1>Kontakt</h1>
<form method="post" action="contact" class="postform">
  <label>E-Mail-Adresse</label>
  <input type="email" name="email" placeholder="E-Mail-Adresse" required>
  <label>Name</label>
  <input type="text" name="name" placeholder="Name" required>
  <label>Betreff</label>
  <input type="text" name="betreff" placeholder="Betreff" required>
  <label>Nachricht</label>
  <textarea name="nachricht" rows="10"  placeholder="Hier Nachricht eingeben..." required>
  </textarea>
  <button type="submit">Abschicken</button>
</form>
    <br>
    <br>
    <br>
    Kontaktiert uns über Twitter:<br>
    <a href="https://www.twitter.com/hsrpanthera" target="new">Twittervogel einblenden</a>
    <br>
    <br>
    <br>
    Oder kommt aus unseren Discord-Server:<br>
    <i>Hier Link zum Discord einfügen</i>
</div>
<?php require "partials/footer.php"; ?>