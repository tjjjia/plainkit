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
    <div class="time">
        <time>From: <?= $event->datefrom() ?></time>
        <time>To: <?= $event->dateto() ?></time>
        <?php if($event->isAllDay()->isTrue()): ?>
        <time>From: <?= $event->timefrom() ?></time>
        <time>To: <?= $event->timeto() ?></time>
        <?php else: ?>
        <?php endif ?>
    </div>
    <div class="organisation">
        <div>Organised by: 
            <?php foreach ($event->organisationinternal()->split() as $internal): ?>
                <span><?= page('network')->index()->findBy('slug', $internal)->title() ?></span>
            <?php endforeach ?>
            <?php foreach ($event->organisationexternal()->split() as $external): ?>
                <span><?= $external ?></span>
            <?php endforeach ?>
        </div>
        <div>Venue: <?= $event->location() ?></div>
        <a href="<?= $event->ticketvendorurl() ?>"><?= $event->ticketvendor() ?></a>
    </div>
    <div class="content"><?= $event->description()->kt() ?></div>
    <div class="gallery">
    <?php foreach($event->gallery()->toFiles() as $image): ?>
        <figure>
            <a href="<?= $image->url() ?>">
                <img src="<?= $image->url() ?>" alt="">
            </a>
        </figure>
    <?php endforeach ?>
    </div>
</div>