<?php

// $data = [
//   'title' => $page->title()->value()
// ];


// echo json_encode($data);
$html .= snippet('organisation', ['organisation' => $organisation], true);

$json['html'] = $html;
$json['more'] = $more;

echo json_encode($json);