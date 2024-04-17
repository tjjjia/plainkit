<?php snippet('header') ?>

<div id="index" class="main-container">
    <div class="intro">
        <?= $site->page('network')->introduction()->kt() ?>
    </div>
    <ul class="organisations" id="listed">
    <?php foreach($site->page('network')->children()->listed() as $organisation): ?>
        <li class="modal-links" data-link="<?= $organisation->url()?>">
            <a href="<?= $organisation->url() ?>">
                <?= html($organisation->title()) ?>
            </a>
            <span class="organisation-location">(<?= $organisation->location() ?>)</span>
        </li>
    <?php endforeach ?>
    </ul>
</div>
<div id="render" class="main-container">
    <?php snippet('organisation', ['organisation' => $page]) ?>
</div>

<?php snippet('footer') ?>