<?php snippet('header') ?>

<div id="index" class="main-container">
    <div class="intro">
        <?= $page->introduction()->kt() ?>
    </div>

    <ul class="organisations" id="listed">
    <?php foreach($page->children()->listed()->sortBy('title', 'asc') as $organisation): ?>
        <li class="modal-links" data-link="<?= $organisation->url()?>">
            <a href="<?= $organisation->url() ?>">
                <?= html($organisation->title()) ?>
            </a>
            <span class="organisation-location">(<?= $organisation->location() ?>)</span>
        </li>
    <?php endforeach ?>
    </ul>

    <!-- <ul id="unlisted">
    <?php foreach($page->children()->unlisted() as $ulpage): ?>
        <li>
            <a href="<?= $ulpage->url() ?>">
            <?= html($ulpage->title()) ?></a>
        </li>
    <?php endforeach ?>
    </ul> -->
</div>
<div id="render" class="main-container"></div>

<?php snippet('footer') ?>