<?php

return function ($page) {
  $limit    = 2;
  $unfiltered = $page->children()->listed();

  $time = param("time");
  if ($time == "all"){
    // show all events, unfiltered
    $events = $unfiltered;
  } else if($time == "this-week"){
    // show this weeks events (this year, this week no.)
    $week = date('YW');
    $thisweek = $unfiltered->filter(function($child) use($week){
      // echo $child->dateTo()->toDate('YW');
      return $child->dateTo()->toDate('YW') == $week;
    });
    $events = $thisweek;  
  } else {
    // default: show upcoming events
    $today = date('Y-m-d');
    $upcoming = $unfiltered->filter(function($child) use($today){
      return $child->dateTo()->toDate('Y-m-d') >= $today;
    });
    $events = $upcoming;  

  }

  $events = $events->paginate($limit);  


  return [
      'limit'      => $limit,
      'events'   => $events,
      'pagination' => $events->pagination()
      'has' => $events->pagination()
  ];
};