<div class="event-date">
    <div class="event-day">
        <?php 
            $from = $event->datefrom()->toDate('D j M y');
            $to = $event->dateto()->toDate('D j M y');
            if($from === $to): 
        ?>
            <?= $from ?>
        <?php else: ?>
            <?= $from ?> — <?= $to ?>
        <?php endif ?>
    </div>
    <?php if($event->isAllDay()->isTrue()): ?>
    <div class="event-time">
        <div class="event-time-from"><?= $event->timeFrom()->toDate('H:i') ?></div>
        <div class="event-time-to"><?= $event->timeTo()->toDate('H:i') ?></div>
        <div class="event-time-timezone"><?= $event->timeFrom()->toDate('e') ?></div>
    </div>
    <?php endif ?>
</div>