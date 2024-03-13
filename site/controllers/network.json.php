<?php

return function ($page) {
  $limit      = 1;
  $organisations = $page->children()->listed()->paginate($limit);
  $pagination = $organisations->pagination();
  $more       = $pagination->hasNextPage();

  return [
      'organisations' => $organisations,
      'more'     => $more,
      'html'     => '',
      'json'     => [],
    ];
};