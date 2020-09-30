<?php require 'partials/header.php'; ?>
<div class="shadowbox">
<h1>Jersey-Bestellung</h1>
<form method="post" action="jerseys" class="postform">
    <label>Trikot-Name</label>
    <input type="text" name="name" placeholder="Trikot-Name">
    <label>Trikot-Nummer</label>
    <input type="text" name="nummer" placeholder="Trikot-Nummer">
    <label>Größe</label>
    <select name="size" id="size">
        <option value="XS">XS</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
    </select>
    <label>Anzahl</label>
    <select name="menge" id="menge">
        <option value="1">1 Stück</option>
        <option value="2">2 Stück</option>
        <option value="3">3 Stück</option>
        <option value="4">4 Stück</option>
        <option value="5">5 Stück</option>
        <option value="6">6 Stück</option>
        <option value="7">7 Stück</option>
        <option value="8">8 Stück</option>
        <option value="9">9 Stück</option>
        <option value="10">10 Stück</option>
    </select>
    <label>Lieferadresse</label>
    <input type="text" name="liefer1" placeholder="Vollständiger Name" required>
    <input type="text" name="liefer2" placeholder="Straße, Hausnummer" required>
    <input type="text" name="liefer3" placeholder="PLZ, Wohnort" required>
    <button type="submit">Bestellung hinzufügen</button>
</form>
</div>
<?php require 'partials/footer.php'; ?>