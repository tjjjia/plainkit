<?php

$html = snippet('event', ['event' => $page], true);

$json['html'] = $html;

echo json_encode($json);