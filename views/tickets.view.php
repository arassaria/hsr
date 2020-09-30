<?php require 'partials/header.php'; 
$tickets = App::get('database')->selectAll('tickets');
?>
<div class="shadowbox">
<div class="grid">
    <div class="grid__row">
        <div class="grid__column">
            Ticket-ID 
        </div>
        <div class="grid__column">
            Betreff
        </div>
        <div class="grid__column">
            Nachricht
        </div>
        <div class="grid__column">
            E-Mail-Adresse
        </div>
        <div class="grid__column">
            Name
        </div>
    </div>
    <?php foreach($tickets as $ticket): ?>
    <div class="grid__row">
        <div class="grid__column">
            <?= "$ticket->id"; ?>
            </div>
        <div class="grid__column">
            <?= "$ticket->betreff"; ?>
            </div>
        <div class="grid__column">
            <?= "$ticket->nachricht"; ?>
            </div>
        <div class="grid__column">
            <?= "$ticket->email"; ?>
            </div>
        <div class="grid__column">
            <?= "$ticket->name"; ?>
            </div>
    </div>
    <?php endforeach; ?>
    </div>
<hr>
<form action="tickets" method="post" class="postform">
    <label>Ticket löschen</label>
    <input type="name" name="id" required>
    <button type="submit">Löschen</button>
</form>
</div>
<?php require 'partials/footer.php'; ?>