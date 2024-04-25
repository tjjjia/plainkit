<div class="event-organisations">
    <span>Organised by:</span>
    <?php foreach ($event->organisationinternal()->split() as $internal): ?>
        <div class="event-organisation"><?= page('network')->index()->findBy('slug', $internal)->title() ?></div>
    <?php endforeach ?>
    <?php foreach ($event->organisationexternal()->split() as $external): ?>
        <div class="event-organisation"><?= $external ?></div>
    <?php endforeach ?>
</div>