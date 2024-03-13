<?php

return function ($page) {
  $limit    = 1;
  $organisations = $page->children()->listed()->paginate($limit);

  return [
      'limit'      => $limit,
      'organisations'   => $organisations,
      'pagination' => $organisations->pagination(),
    ];
};
