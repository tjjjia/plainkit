<?php snippet('header') ?>

<div id="index" class="main-container">
</div>
<div id="render" class="main-container">
    <div class="event">
        <div class="header">
            <h1><?= $page->title() ?></h1>
            <h2><em><?= $page->subhead() ?></em></h2>
        </div>
        <div class="cover">
            <?php if($image = $page->cover()->toFile()): ?>
            <img src="<?= $image->url() ?>" alt="">
            <?php endif ?>
        </div>  
        <div class="time">
            <time>From: <?= $page->datefrom() ?></time>
            <time>To: <?= $page->dateto() ?></time>
            <?php if($page->isAllDay()->isTrue()): ?>
            <time>From: <?= $page->timefrom() ?></time>
            <time>To: <?= $page->timeto() ?></time>
            <?php else: ?>
            <?php endif ?>
        </div>
        <div class="organisation">
            <div><?= $page->organisation() ?></div>
            <div><?= $page->location() ?></div>
            <a href="<?= $page->ticketvendorurl() ?>"><?= $page->ticketvendor() ?></a>
        </div>
        <div class="content"><?= $page->description()->kt() ?></div>
        <div class="gallery">
        <?php foreach($page->gallery()->toFiles() as $image): ?>
            <figure>
                <a href="<?= $image->url() ?>">
                    <img src="<?= $image->url() ?>" alt="">
                </a>
            </figure>
        <?php endforeach ?>
        </div>
    </div>
</div>

<?php snippet('footer') ?>