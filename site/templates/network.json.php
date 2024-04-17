<?php

// $data = [
//   'title' => $page->title()->value()
// ];
foreach($organisations as $organisation){
	$html .= snippet('dsfasf-organisation', ['organisation' => $organisation], true);
}

$json['html'] = $html;
$json['more'] = $more;

echo json_encode($json);