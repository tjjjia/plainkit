<?php snippet('header') ?>

<div id="index" class="main-container">
    <ul class="events" data-page="<?= $pagination->nextPage() ?>" id="listed">
    <?php foreach($events as $event): ?>
        <li>
            <?= snippet('listitem', ['event' => $event]); ?>
        </li>
    <?php endforeach ?>

    </ul>
    <button class="load-more" accesskey="m">Load more</button>
</div>
<div id="render" class="main-container">
    <?php 
    /*
    <?php snippet('event', ['event' => $event]) ?>
    */
    ?>
</div>

<?php snippet('footer') ?>