<?php

// $data = [
//   'title' => $page->title()->value(),
//   'headline' => $page->headline()->value(),
//   'description' => $page->description()->value(),
//   'location' => $page->location()->value(),
//   'homepageurl' => $page->homepageurl()->value(),
// ];

// echo json_encode($data);

$html .= snippet('organisation', ['organisation' => $organisation], true);


$json['html'] = $html;

echo json_encode($json);