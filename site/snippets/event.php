<div class="event">
    <div class="header">
        <h1><?= $event->title() ?></h1>
        <h2><em><?= $event->subhead() ?></em></h2>
    </div>
    <div class="cover">
        <?php if($image = $event->cover()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="">
        <?php endif ?>
    </div>
    <div class="event-meta">
        <?= snippet('event-date', ['event' => $event]); ?>
        <?= snippet('event-organisations', ['event' => $event]); ?>
        <?php snippet('event-location', ['event' => $event], slots: true) ?>
            <div class="event-venue">
                <a href="<?= $event->geolocation() ?>" data-debug="true" target="_blank"><?= $event->location() ?></a><span class="event-city"><?= $event->city() ?></span>
            </div>
        <?php endsnippet() ?>
    </div>
    <div class="content"><?= $event->description()->kt() ?></div>
    <div class="gallery">
    <?php foreach($event->gallery()->toFiles() as $image): ?>
        <figure>
            <img src="<?= $image->url() ?>" alt="">
        </figure>
    <?php endforeach ?>
    </div>
</div>