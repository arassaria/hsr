<?php require "views/partials/header.php"; ?>
<div class="shadowbox">
    <h1>Willkommen auf der Seite der HSR Panthera</h1>
    <h2>2-fache ODS-Champions, sowie S2 ODA-Champions</h2>
    <h3>News</h3>
<?php if(empty($_SESSION['securitykey'])): ?>
<?php foreach($posts as $post) : ?>
<div class="grid">
    <div class="grid__row">
        <div class="grid__column heading">
            <strong><?= $post->title; ?></strong>
        </div>
        <div class="grid__column__date">
            <?= $post->date; ?>
        </div>
    </div>
    <div class="grid__row">    
        <div class="grid__column">
            <?= $post->content; ?>
        </div>
    </div>
    <div class="grid__row">
        <div class="grid__column">
            Autor: <?= ucwords($post->author); ?>
        </div>
    </div>
</div>
<hr>
<?php endforeach; ?>
<?php elseif($_SESSION['securitykey'] <= 1): ?>
<?php foreach($posts as $post) : ?>
<div class="grid">
    <div class="grid__row">
        <div class="grid__column heading">
            <strong><?= $post->title; ?></strong>
        </div>
        <div class="grid__column__date">
            <?= $post->date; ?>
        </div>
    </div>
    <div class="grid__row">  
        <div class="grid__column">
            <?= $post->content; ?>
        </div>
    </div>
    <div class="grid__row">
        <div class="grid__column">
            Autor: <?= ucwords($post->author); ?>
        </div>
    </div>
</div>
<hr>
<?php endforeach; ?>
<?php elseif($_SESSION['securitykey'] >= 2): ?>
    <?php foreach($posts as $post) : ?>
<div class="grid">
    <div class="grid__row">
        <div class="grid__column__date">
            <strong>Post-ID</strong>
        </div>
        <div class="grid__column heading">
            <strong><?= $post->title; ?></strong>
        </div>
        <div class="grid__column__date">
            <?= $post->date; ?>
        </div>
    </div>
    <div class="grid__row">  
        <div class="grid__column__date">
            <?= $post->id; ?>
        </div>
        <div class="grid__column text">
            <?= $post->content; ?>
        </div>
    </div>
    <div class="grid__row">
        <div class="grid__column">
            Autor: <?= ucwords($post->author); ?>
        </div>
    </div>
</div>
<hr>
<?php endforeach; ?>
<form method="post" action="deletepost" class="postform">
    <label>Post löschen</label>
    <input type="text" name="id" placeholder="Post-ID">
    <button type="submit">Post löschen</button>
</form>
<?php endif; ?>
</div>
<?php require "views/partials/footer.php"; ?>