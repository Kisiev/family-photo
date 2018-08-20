<?php
$router = new \Phalcon\Mvc\Router();


$router->add(
	"/blog/(.*)/",
	array(
		"controller" => "blog",
		"action"     => "detail",
		"code"     => 1
	)
);
$router->add(
	"/blog/:int/",
	array(
		"controller" => "blog",
		"action"     => "index",
		"page"     => 1
	)
);

$router->handle();
return $router;

?>