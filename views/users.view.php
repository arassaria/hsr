<?php require 'partials/header.php'; ?>
<div class="shadowbox">
<h1>Willkommen <?= ucwords($_SESSION['username']); ?></h1>
<div class="grid">
    <div class="grid__row">
        <div class="grid__column">
            <strong>Meine Bestellung</strong>
        </div>
    </div>
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
    <?php foreach ($orders as $order) : ?>
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
<form method="post" action="updatepw" class="postform">
    <label>Passwort-Ändern</label>
    <input type="password" name="password" placeholder="Neues Passwort">
    <button type="submit">Passwort ändern</button>
</form>
<?php if ($_SESSION['securitykey'] >= 2): ?>
<hr>
<div class="grid player">
    <div class="grid__row">
        <div class="grid__column">
            <h3>Moderation</h3>
        </div>
    </div>
    <?php require 'partials/admin-nav.php'; ?>
<?php endif; ?>
    </div>
<?php require 'partials/footer.php'; ?>