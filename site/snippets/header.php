<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->seoTitle()->or('Cinema Collectiva') ?></title>
    <?= css('assets/css/index.css') ?>
    <meta name="keywords" content="art, cinema, culture, rotterdam, amsterdam, the hague" />
    <meta name="author" content="Cinema Collectiva" />
    <meta
    property="og:description"
    content="<?= $page->seoDescription()->or('Cinema Collectiva') ?>"
    />
    <meta property="og:title" content="<?= $page->seoTitle()->or('Cinema Collectiva') ?>" />
    <meta name="twitter:title" content="<?= $page->seoTitle()->or('Cinema Collectiva') ?>" />
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
            <a href="<?= $site->page('calendar')->url() ?>"><?= $site->page('calendar')->title() ?></a>
        </nav>
        <nav>
            <a href="<?= $site->page('network')->url() ?>"><?= $site->page('network')->title() ?></a>
        </nav>
        <?php elseif($page->is('network')):?>
        <nav>
            <a href="<?= $site->page('calendar')->url() ?>"><?= $site->page('calendar')->title() ?></a>
        </nav>
        <nav aria-current="page">
            <a href="<?= $site->page('network')->url() ?>"><?= $site->page('network')->title() ?></a>
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