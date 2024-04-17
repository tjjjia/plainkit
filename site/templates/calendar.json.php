<?php

foreach($events as $event) {

  $html .= snippet('listed-event', ['event' => $event], true);

}

$json['html'] = $html;
$json['more'] = $more;

echo json_encode($json);