<?php

return function ($page) {

  $limit      = 2;
  $today = date('Y-m-d');
  $unfiltered = $page->children()->listed();
  $upcoming = $unfiltered->filter(function($child) use($today){
    return $child->dateTo()->toDate('Y-m-d') >= $today;
  });
  $events     = $upcoming->paginate($limit);
  $pagination = $events->pagination();
  $more       = $pagination->hasNextPage();

  return [
      'events' => $events,
      'more'     => $more,
      'html'     => '',
      'json'     => [],
    ];
};