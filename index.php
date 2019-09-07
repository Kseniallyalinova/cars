<?php
error_reporting (E_ALL);
if (version_compare(phpversion(), '5.1.0', '<') == true) { die ('PHP5.1 Only'); }
//separator
define ('DIRSEP', DIRECTORY_SEPARATOR);
//path to site
$site_path = dirname(__FILE__) . DIRSEP;
define ('site_path', $site_path);

//load all libraries
require 'includes/startup.php'; //автозагрузчик  и создание объекта registry


//DB
$db = new PDO('mysql:host=localhost;dbname=cars', 'root', 'test');


$registry->set ('db', $db);

//now we know about templates
$template = new Template($registry);
$registry->set ('template', $template);

//create router
$router = new Router($registry);
//register router to be known
$registry->set ('router', $router);
//tell to the router where controllers are
$router->setPath (site_path . 'controllers');
//identify the controller from http , include it and call the action of this controller (name of action was taken from http)
$router->delegate();



?>