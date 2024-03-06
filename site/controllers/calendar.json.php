<?php

return function ($page) {

  $limit      = 2;
  $events   = $page->children()->listed()->paginate($limit);
  $pagination = $events->pagination();
  $more       = $pagination->hasNextPage();

  return [
      'events' => $events,
      'more'     => $more,
      'html'     => '',
      'json'     => [],
    ];
};