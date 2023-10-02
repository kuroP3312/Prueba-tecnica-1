<?php

define('ROOT', dirname(__DIR__).DIRECTORY_SEPARATOR);
define('SRC', ROOT.'src'.DIRECTORY_SEPARATOR);
define('VIEWS', SRC.'Views'.DIRECTORY_SEPARATOR);
define('PUBLIC_FOLDER', 'public');
define('PUBLIC_FOLDER_PATH', ROOT.PUBLIC_FOLDER.DIRECTORY_SEPARATOR);

require ROOT.'vendor/autoload.php';

use Core\Router;

$router = new Router();