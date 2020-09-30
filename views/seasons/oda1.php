<?php $matches = App::get('database')->selectseason(1, 0);
$results = App::get('database')->gettable(1, 0);
$playoffs = App::get('database')->getplayoffs(1, 0); ?>
<hr>
<h1>ODA Season 1</h1>
<div class="grid">
            <div class="grid__row">
                <div class="grid__column heading">
                    <strong>Liga</strong>
                </div>
                <div class="grid__column heading">
                    <strong>Season</strong>
                </div>
                <div class="grid__column heading">
                    <strong>Spieltag</strong>
                </div>
                <div class="grid__column heading">
                    <strong>Heim-Team</strong>
                </div>
                <div class="grid__column heading">
                    <strong>Ergebnis</strong>
                </div>
                <div class="grid__column heading">
                    <strong>Gast-Team</strong>
                </div>
            </div>
            <?php foreach($matches as $match) : ?>
                <div class="grid__row">
                    <div class="grid__column">
                        <?php if ($match->ods == 0 && $match->season == 1) : ?>
                            <strong><?= "ODA"; ?></strong>
                        <?php endif; ?>
                    </div> 
                    <div class="grid__column">
                        <?php if ($match->ods == 0 && $match->season == 1) : ?>
                            <strong><?= "Season " . $match->season; ?></strong>
                        <?php endif; ?>
                    </div>  
                    <div class="grid__column">
                    <?php if ($match->spieltag == 8 && $match->ods == 0 && $match->season == 1) : ?>
                        <strong><?= "Halbfinale"; ?></strong>
                    <?php elseif ($match->spieltag == 9 && $match->ods == 0 && $match->season == 1) : ?>
                        <strong><?= "Spiel um Platz 3"; ?></strong>
                    <?php elseif ($match->spieltag == 10 && $match->ods == 0 && $match->season == 1) : ?>
                        <strong><?= "Finale"; ?></strong>
                    <?php elseif ($match->ods == 0 && $match->season == 1) : ?>
                        <strong><?= "Spieltag " . $match->spieltag; ?></strong>
                    <?php endif; ?>
                    </div>  
                    <div class="grid__column">
                        <?php if($match->home == 1 && $match->ods == 0 && $match->season == 1) : ?>
                            <div class="blue"><?= "Panthera Academy";  ?></div>
                        <?php elseif($match->home == 0 && $match->ods == 0 && $match->season == 1) : ?>
                            <div class="blue"><?= $match->opponent; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="grid__column">
                        <?php if ($match->ods == 0 && $match->season == 1) : ?>
                            <?= $match->result1 . ":" . $match->result2; ?>
                        <?php endif; ?>
                    </div>
                    <div class="grid__column">
                        <?php if($match->home == 0 && $match->ods == 0 && $match->season == 1) : ?>
                            <div class="red"><?= "Panthera Academy"; ?></div>
                        <?php elseif($match->home == 1 && $match->ods == 0 && $match->season == 1) : ?>
                            <div class="red"><?= $match->opponent; ?></div>
                        <?php endif; ?>
                    </div> 
                </div> 
            <?php endforeach; ?>
        </div>
        <hr>
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column">
                    Regular Season 
                </div>
            </div>
            <div class="grid__row">
                <div class="grid__column">
                    Platzierung
                </div>
                <div class="grid__column">
                    Team-Name
                </div>
                <div class="grid__column">
                    W-L
                </div>
                <div class="grid__column">
                    Map-Differenz
                </div>
                <div class="grid__column">
                    Punkte
                </div>
            </div>
            <?php foreach($results as $result): ?>
            <div class="grid__row">
                <div class="grid__column">
                    <?= $result->position; ?>
                </div>
                <div class="grid__column">
                    <?= $result->team; ?>
                </div>
                <div class="grid__column">
                    <?= $result->wins . '-' . $result->losses; ?>
                </div>
                <div class="grid__column">
                    <?= $result->map_wins . '-' . $result->map_losses; ?>
                </div>
                <div class="grid__column">
                    <?= $result->points; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column">
                    Playoffs
                </div>
            </div>
            <div class="grid__row">
                <div class="grid__column">
                    Platzierung
                </div>
                <div class="grid__column">
                    Team
                </div>
                <div class="grid__column">
                    Platzierung in Regular Season
                </div>
            </div>
            <?php foreach($playoffs as $playoff): ?>
            <div class="grid__row">
                <div class="grid__column">
                    <?= $playoff->position; ?>
                </div>
                <div class="grid__column">
                    <?= $playoff->team; ?>
                </div>
                <div class="grid__column">
                    <?= $playoff->regular; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>               