<?php

$routes = [];

$routes['/'] = function () {
  include __DIR__ . '/view/index.phtml';
  exit;
};
$routes['/phpinfo.php'] = function () {
  phpinfo();
};

return $routes;
