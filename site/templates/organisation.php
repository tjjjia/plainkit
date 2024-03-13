<?php snippet('header') ?>

<div id="index" class="main-container">
    <ul class="events" data-page="1" id="listed">
            <?php foreach($site->page('network')->children() as $event): ?>
                <?= snippet('listitem', ['event' => $event]); ?>
            <?php endforeach ?>
    </ul>
</div>
<div id="render" class="main-container">
    <?php snippet('organisation', ['organisation' => $page]) ?>
</div>

<?php snippet('footer') ?>