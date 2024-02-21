<?php

$data = [
  'title' => $page->title()->value(),
  "headline" => $page->headline()->value(),
  "subhead" => $page->subhead()->value(),
  "organisation" => $page->organisation()->value(),
  "location" => $page->location()->value(),
  "geolocation" => $page->geolocation()->value(),
  "ticketvendor" => $page->ticketvendor()->value(),
  "ticketvendorurl" => $page->ticketvendorurl()->value(),
  "datefrom" => $page->datefrom()->value(),
  "dateto" => $page->titdatetole()->value(),
  "isallday" => $page->isallday()->value(),
  "timefrom" => $page->timefrom()->value(),
  "timeto" => $page->timeto()->value(),
  "timezone" => $page->timezone()->value(),
  "description" => $page->description()->value(),
  "cover" => $page->cover()->value(),
  "gallery" => $page->gallery()->value(),
  "uuid" => $page->uuid()->value(),
];

echo json_encode($data);