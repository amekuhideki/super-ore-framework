<?php

$routes = [];

$routes['/'] = function () {
  ob_start();
  include __DIR__ . '/view/index.phtml';
  
  return [200, ['Content-Type' => 'text/html'], ob_get_clean()];
};
$routes['/phpinfo.php'] = function () {
  phpinfo();
};

return $routes;
