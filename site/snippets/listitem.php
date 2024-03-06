<li>
    <a href="<?= $event->url() ?>">
        <?= $event->title() ?>
    </a>
    <div>        
        <time><?= $event->datefrom() ?></time>
        <div><?= $event->organisation() ?></div>
    </div>
</li>