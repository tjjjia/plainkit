<?php

return function ($page) {
  $limit    = 2;
  $unfiltered = $page->templateSiblings()->listed();

  $events = $unfiltered;  

  // default: show upcoming events
  $today = date('Y-m-d');
  $upcoming = $unfiltered->filter(function($child) use($today){
    return $child->dateTo()->toDate('Y-m-d') >= $today;
  });
  $events = $upcoming;

  $events = $events->paginate($limit);

  $pagination = $events->pagination();
  $more       = $pagination->hasNextPage();
  
  return [
      'limit'      => $limit,
      'events'   => $events,
      'pagination' => $pagination,
      'more'     => $more,
      'currentevent' => $page,
    ];
};
