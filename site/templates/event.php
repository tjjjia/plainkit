<?php snippet('header') ?>

<div id="index" class="main-container">
    <ul class="events" data-page="2" id="listed">
        <?php foreach($site->page('calendar')->children()->listed() as $event): ?>
            <?= snippet('listitem', ['event' => $event]); ?>
        <?php endforeach ?>
    </ul>
</div>
<div id="render" class="main-container">
    <?php snippet('event', ['event' => $page]) ?>
</div>

<?php snippet('footer') ?>