<div class="event-location">
    <span>Location: </span> 
    <?= $slot ?>
    <?php if($event->ticketvendorurl()->isNotEmpty()): ?>
        <a href="<?= $event->ticketvendorurl() ?>" data-debug="true" target="_blank"><?= $event->ticketvendor() ?></a>
    <?php endif ?>
</div>