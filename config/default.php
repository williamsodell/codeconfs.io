<?php
/**
 * 
 * Overrides for 'default' config mode.
 * 
 * @var Aura\Framework\System $system Aura system directories; when cast to
 * a string, the Aura system root directory.
 * 
 * @var Aura\Autoload\Loader $loader The autoloader for the system.
 * 
 * @var Aura\Di\Container $di The DI container for the system.
 * 
 */

// attach the path for a route named 'home' to the controller and action
$di->params['Aura\Router\Map']['attach'][''] = [
	// all routes with the '' path prefix (i.e., no prefix)
	'routes' => [
		// a route named 'home'
		'home' => [
			'path' => '/',
			'values' => [
				'controller' => 'home',
				'action'     => 'index',
			],
		],
	]
];

// map the 'home' controller value to the controller class
$di->params['Aura\Framework\Web\Controller\Factory']['map']['home'] = 'CodeConfsIO\Package\Web\Home\HomePage';