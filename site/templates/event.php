<?php snippet('header') ?>

<div id="index" class="main-container">
    <ul class="events" data-page="<?= $pagination->nextPage() ?>" id="listed">
        <?php
            if( count($events) > 0){
                foreach($events as $event) {
                    echo snippet('listed-event', ['event' => $event]);
                }
            } else {
                echo "No more events";
            };
        ?>
    </ul>

    <button class="load-more" accesskey="m" <?= $more ?: "hidden"; ?>>Load more</button>
</div>
<div id="render" class="main-container">
    <?php snippet('event', ['event' => $page]) ?>
</div>

<?php snippet('footer') ?>