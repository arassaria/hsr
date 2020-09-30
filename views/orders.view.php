<?php require 'partials/header.php'; ?>
<div class="shadowbox">
<h1>Bestellte Jerseys</h1>
<div class="grid">
    <div class="grid__row">
        <div class="grid__column">
            <strong>Bestellungs-ID</strong>
        </div>
        <div class="grid__column">
            <strong>Benutzername</strong>
        </div>
        <div class="grid__column">
            <strong>Trikot-Name</strong>
        </div>
        <div class="grid__column">
            <strong>Trikot-Nummer</strong>
        </div>
        <div class="grid__column">
            <strong>Größe</strong>
        </div>
        <div class="grid__column">
            <strong>Anzahl</strong>
        </div>
        <div class="grid__column">
            <strong>Lieferadresse</strong>
        </div>
        <div class="grid__column">
            <strong>Zahlungsstatus</strong>
        </div>
    </div>
    <?php foreach($orders as $order): ?>
    <div class="grid__row">
        <div class="grid__column">
            <?= "$order->id"; ?>
            </div>
        <div class="grid__column">
            <?= "$order->username"; ?>
            </div>
        <div class="grid__column">
            <?= "$order->name"; ?>
            </div>
        <div class="grid__column">
            <?= "$order->nummer"; ?>
            </div>
        <div class="grid__column">
            <?= "$order->size"; ?>
            </div>
        <div class="grid__column">
            <?= "$order->menge"; ?>
            </div>
        <div class="grid__column">
            <?= "$order->liefer1"; ?><br>
            <?= "$order->liefer2"; ?><br>
            <?= "$order->liefer3"; ?>
            </div>
        <div class="grid__column">
            <?php if ($order->paid == 1) {
                echo "Bezahlt";
            } else {
                echo "Nicht bezahlt";
            }; ?>
    </div>
        </div>
    <?php endforeach; ?>
</div>
<hr>
<form method="post" action="orders" class="postform">
    <label>Bezahl-Status ändern</label>
    <input type="text" name="id" placeholder="Bestellungs-ID">
    <select name="status" id="status">
        <option value="0">Nicht bezahlt</option>
        <option value="1">Bezahlt</option>
    </select>
    <button type="submit">Änderung durchführen</button>
</form>
<hr>
<form method="post" action="deleteorder" class="postform">
    <label>Bestellung löschen</label>
    <input type="text" name="id" placeholder="Bestellungs-ID">
    <button type="submit">Löschen</button>
</form>
</div>
<?php require 'partials/footer.php'; ?>