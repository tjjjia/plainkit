<?php
// clone of contollers/network.php to generate left list

return function ($page) {
  $limit    = 1;
  $organisations = $page->children()->listed()->paginate($limit);

  return [
      'limit'      => $limit,
      'organisations'   => $organisations,
      'pagination' => $organisations->pagination(),
    ];
};
