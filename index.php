<?php
require 'core/bootstrap.php';

$routes = [
	'/createassignment' => 'CreateAssignmentController@index',
	'/changeassignment' => 'ChangeAssignmentController@index',
	'/assignments' => 'AssignmentController@index',
	'/create-model' => 'CreateAssignmentController@create',
	'/validate' => 'CreateAssignmentController@validate',
	'/edit' => 'ChangeAssignmentController@edit',
];

$db = [
	'name'     => 'reparaturwerkstatt',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');