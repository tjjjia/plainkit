<?php snippet('header') ?>

<div id="index" class="main-container">
    <ul id="listed">
    <?php foreach($page->children()->listed() as $lipage): ?>
        <li>
            <a href="<?= $lipage->url() ?>">
            <?= html($lipage->title()) ?></a>
        </li>
    <?php endforeach ?>

    <ul id="unlisted">
    <?php foreach($page->children()->unlisted() as $ulpage): ?>
        <li>
            <a href="<?= $ulpage->url() ?>">
            <?= html($ulpage->title()) ?></a>
        </li>
    <?php endforeach ?>
    </ul>
    </ul>
</div>
<div id="render" class="main-container">
    <div id="display">
        Result
    </div>
</div>

<?php snippet('footer') ?>