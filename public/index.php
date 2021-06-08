<?php 
require_once __DIR__.'/../vendor/autoload.php';//requires the autoload.
use app\controllers\SiteController;
use app\controllers\AuthController;
use app\core\Application;
use app\database\models\Model;
use app\database\models\Articles;
use app\database\Connection;
use app\database\seeders\Seeder;

session_start();

$app = new Application(dirname(__DIR__));//passes the root directory of this file into constructor.
$router = $app->getRouter();
$router->get('/', [SiteController::class, 'index']);

$router->get('/login', [SiteController::class, 'login']);
$router->get('/logout', [SiteController::class, 'logout']);
$router->get('/sign_up', [SiteController::class, 'sign_up']);

$router->post('/login', [AuthController::class, 'login']);
$router->get('/home', [SiteController::class, 'home']);

$router->post('/sign_up', [AuthController::class, 'signUp']);


$router->get('/articles', [SiteController::class, 'allArticles']);
$router->get('/article', [SiteController::class, 'showArticle']);

$router->get('/health', [SiteController::class, 'health']);
$router->get('/science', [SiteController::class, 'science']);
$router->get('/sport', [SiteController::class, 'sport']);
$router->get('/business', [SiteController::class, 'business']);

$router->get('/admin', [SiteController::class, 'admin']);

$app->run();

?>
