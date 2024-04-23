<li>
    <a href="<?= $event->url() ?>"><?= $event->title() ?></a>
    <div>        
        <time><?= $event->datefrom() ?></time>
        <div>
            <?php foreach ($event->organisationinternal()->split() as $internal): ?>
                <span><?= page('network')->index()->findBy('slug', $internal)->title() ?></span>
            <?php endforeach ?>
            <?php foreach ($event->organisationexternal()->split() as $external): ?>
                <span><?= $external ?></span>
            <?php endforeach ?>
        </div>
    </div>
</li>