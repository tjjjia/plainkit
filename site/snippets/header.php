<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Collectiva</title>
    <?= css('assets/css/index.css') ?>
    <meta name="keywords" content="Cinema Collectiva: an alliance of nomadic screen initiatives in the Netherlands" />
    <meta name="author" content="Cinema Collectiva" />
    <meta
    property="og:description"
    content="Cinema Collectiva: an alliance of nomadic screen initiatives in the Netherlands"
    />
    <meta property="og:title" content="Cinema Collectiva" />
    <meta name="twitter:title" content="Cinema Collectiva" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
    <link
        type="text/plain"
        rel="author"
        href="<?= url('humants.txt') ?>"
    />
</head>
<body>
    <header>
        <?php 
            if($page->is('calendar')): ?>
        <nav aria-current="page">
                <?= $site->page('calendar')->title() ?>
        </nav>
        <nav>
            <a href="<?= $site->page('network')->url() ?>"><?= $site->page('network')->title() ?></a>
        </nav>
        <?php elseif($page->is('network')):?>
        <nav aria-current="page">
            <?= $site->page('network')->title() ?>
        </nav>
        <nav>
            <a href="<?= $site->page('calendar')->url() ?>"><?= $site->page('calendar')->title() ?></a>
        </nav>
        <?php else: ?>
        <nav>
            <a href="<?= $site->page('calendar')->url() ?>"><?= $site->page('calendar')->title() ?></a>
        </nav>
        <nav>
            <a href="<?= $site->page('network')->url() ?>"><?= $site->page('network')->title() ?></a>
        </nav>
        <?php endif ?>
    </header>
<main>