<?php require "views/partials/header.php";
$season=1; 
$ods=1;
$ods2=2;
$playerss1 = App::get('database')->selectplayerss1($season, $ods, $ods2);
$playerss2 = App::get('database')->selectplayerss2($season, $ods, $ods2);
?>
<div class="shadowbox">
    <h1>HSR Panthera</h1>
    <h2>Unser ODS-Team</h2>
    <h3>ODS Season 1</h3>
    <div class="grid team">
          <div class="grid__row">
                      <div class="grid__column heading"><strong>Name</strong></div>
                      <div class="grid__column heading"><strong>Rolle</strong></div>
                    </div>
                 <?php foreach ($playerss1 as $players1) : ?>
                    <div class="grid__row"> 
                      <div class="grid__column"> 
                            <?= $players1->name; ?> <?= $players1->nummer; ?>
                      </div>
                      <div class="grid__column">
                          <?php require 'forms/role-s1.php'; ?>
                      </div>
                    </div>
                <?php endforeach ; ?>                
                <div class="grid__row">
                      <div class="grid__column">
                        Platzierung: 1.
                      </div>
                    </div>
                 </div>
            <br><hr><br>
            <h3>ODS Season 2</h3>
    <div class="grid team">
                    <div class="grid__row">
                      <div class="grid__column heading"><strong>Name</strong></div>
                      <div class="grid__column heading"><strong>Rolle</strong></div>
                    </div>
                 <?php foreach ($playerss2 as $players2) : ?>
                    <div class="grid__row"> 
                      <div class="grid__column"> 
                            <?= $players2->name; ?> <?= $players2->nummer; ?>
                      </div>
                      <div class="grid__column">
                            <?php require 'forms/role-s2.php'; ?>
                      </div>
                    </div>
                <?php endforeach ; ?>
                <div class="grid__row">
                  <div class="grid__column">
                    Platzierung: 1.
                  </div>
          </div>
      </div>
  </div>
<?php require "views/partials/footer.php"; ?>
