<li>
    <a href="<?= $event->url() ?>"><?= $event->title() ?></a>
    <div>        
        <?php snippet('event-date', ['event' => $event]); ?>
        <?php snippet('event-organisations', ['event' => $event]); ?>
        <?php snippet('event-location', ['event' => $event], slots: true) ?>
            <div class="event-venue">
                <?= $event->location() ?><span class="event-city"><?= $event->city() ?></span>
        <?php endsnippet() ?>
    </div>
</li>