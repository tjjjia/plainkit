<?php


$meta = [
	'url'   => (string)$page->url(),
	'title' => (string)$page->title()
];

$html .= snippet('organisation', ['organisation' => $organisation], true);

$json['meta'] = $meta;
$json['html'] = $html;

echo json_encode($json);