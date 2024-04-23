<?php


$meta = [
	'url'   => (string)$page->url(),
	'title' => (string)$page->title()
];
$html = snippet('event', ['event' => $page], true);

$json['meta'] = $meta;
$json['html'] = $html;

echo json_encode($json);