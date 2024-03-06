<?php

return function ($page) {
  $limit    = 2;
  $events = $page->children()->listed()->paginate($limit);

  return [
      'limit'      => $limit,
      'events'   => $events,
      'pagination' => $events->pagination(),
    ];
};