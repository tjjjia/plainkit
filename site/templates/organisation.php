<?php snippet('header') ?>

<div id="index" class="main-container">
    <ul class="organisations" id="listed">
    <?php foreach($site->page('network')->children()->listed() as $organisation): ?>
        <li class="modal-links" data-link="<?= $organisation->url()?>">
            <a href="<?= $organisation->url() ?>">
                <?= html($organisation->title()) ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
</div>
<div id="render" class="main-container">
    <?php snippet('organisation', ['organisation' => $page]) ?>
</div>

<?php snippet('footer') ?>