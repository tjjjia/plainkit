<?php snippet('header') ?>

<div id="index" class="main-container">
    <div class="main-time-filter">
        Time: 
        <span>
            <a href="/calendar/time:this-week" data-debug="true">This week</a>
        </span>
        <span>
            <a href="/calendar/time:upcoming" data-debug="true">Upcoming</a>
        </span>
        <span>
            <a href="/calendar/time:all-time" data-debug="true">All time</a>
        </span>
    </div>
    <div class="main-city-filter">
        Filter by city:
        <?php foreach($cities as $city): ?>
            <span>
                <a href="/calendar/city:<?= strtolower($city) ?>" data-debug="true"><?= $city ?></a>
            </span>
        <?php endforeach ?>
    </div>

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
    <?php 
    /*
    <?php snippet('event', ['event' => $event]) ?>
    */
    ?>
</div>

<?php snippet('footer') ?>