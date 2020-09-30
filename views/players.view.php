<?php require "views/partials/header.php";
$str = strtolower($_POST['player']);
$filteredplayers = array_filter($players, function($player) use($str) {
    return strtolower($player->name) === $str;
}); ?>
<div class="shadowbox">
<?php if (empty($filteredplayers) && empty($filteredplayers2)) {
    echo "Player not Found.";
} ?>
<?php foreach($filteredplayers as $player): ?>
       <div class="grid">
       <div class="grid__row">
            <div class="grid__column__heropic">
                <img src="pics/<?= $player->signature1; ?>.png" alt="<?= $player->signature1; ?>" width="300" height="169">
            </div>
            <div class="grid__column playername">
                <h1><?= $player->name; ?> <?= $player->nummer; ?></h1>
            </div>
        </div>
        <div class="grid__row">
            <div class="grid__column">
                <strong>Rolle:</strong>
            </div>
            <div class="grid__column">
                <?php require 'forms/role.php'; ?>
            </div>
        </div>
        <div class="grid__row">
            <div class="grid__column">
                <strong>Liga:</strong>
            </div>
            <div class="grid__column">
                <?php if ($player->ods <= 2){
                    echo "ODS";
                }   else {
                    echo "ODA";
                }
                ?>
            </div>
            </div>
        <div class="grid__row">
            <div class="grid__column">
                <strong>Seasons gespielt:</strong>
            </div>
            <div class="grid__column"> 
                <?php if ($player->s1 ==1) : ?>
                    Season 1 - ODS<br>
                <?php elseif ($player->s1 ==2) : ?>
                    Season 1 - ODA<br>
                <?php endif; ?>
                <?php if ($player->s2 ==1) : ?>
                    Season 2 - ODS<br>
                <?php elseif ($player->s2 ==2) : ?>
                    Season 2 - ODA<br>
                <?php endif; ?>
                <?php if ($player->s3 ==1) : ?>
                    Season 3 - ODS<br>
                <?php elseif ($player->s3 ==2) : ?>
                    Season 3 - ODA<br>
                <?php endif; ?>
                <?php if ($player->s4 ==1) : ?>
                    Season 4 - ODS<br>
                <?php elseif ($player->s4 ==2) : ?>
                    Season 4 - ODA<br>
                <?php endif; ?>
                <?php if ($player->s5 ==1) : ?>
                    Season 5 - ODS<br>
                <?php elseif ($player->s5 ==2) : ?>
                    Season 5 - ODA<br>
                <?php endif; ?>
                <?php if ($player->s6 ==1) : ?>
                    Season 6 - ODS<br>
                <?php elseif ($player->s6 ==2) : ?>
                    Season 6 - ODA<br>
                <?php endif; ?>
            </div>
                </div>
        <div class="grid__row">
            <div class="grid__column">
                <strong>Current Team:</strong>
            </div>
            <div class="grid__column">
                <?= $player->team; ?>
            </div>
                </div>
       <div class="grid__row">
            <div class="grid__column">
                <strong>Peak:</strong>
            </div>
            <div class="grid__column">
                <?= $player->peak; ?>
            </div>
                </div>
        <div class="grid__row">
            <div class="grid__column">
                <strong>Signature Heroes:</strong>
            </div>
            <div class="grid__column">
                <?= $player->signature1; ?> <br>
                <?= $player->signature2; ?> <br>
                <?= $player->signature3; ?>
            </div>
                </div>
                </div>
<?php endforeach; ?>
</div>
<?php require "views/partials/footer.php"; ?>