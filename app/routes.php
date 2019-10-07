<?php

$routes = [];
$template = new \Oira\TemplateFactory(__DIR__ . '/view/');

$routes['/'] = function () use ($template) {
  return [200, ['Content-Type' => 'text/html'], $template->create('index', [
    'title' => 'ameのホームページのindex',
    'name' => 'ama'
    ])];
};
$routes['/phpinfo.php'] = function () {
  phpinfo();
};

return $routes;
