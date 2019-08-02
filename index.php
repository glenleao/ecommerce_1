<?php 

 require_once("vendor/autoload.php");

 use \Slim\Slim;
 use \Kgdzt\Page;
 use \Kgdzt\PageAdmin;
 use \Kgdzt\Model\User;

 $app = new Slim();

 $app->config('debug', true);

 $app->get('/', function() {

 $page = new Page();

 $page->setTpl("index");
    

 });

 $app->get('/admin', function() {

 $page = new PageAdmin();

 $page->setTpl("index");
    

 });

 $app->get('/admin/login', function(){

 	$page = new PageAdmin([
 		"header"=>false,
 		"footer"=>false
 	]);

 	$page->setTpl("login");
 });

 //rota de login

 $app->post('/admin/login', function(){

 	User::login($_POST["login"], $_POST["password"]);

 	header("Location: /admin");
 	exit;
 })

 $app->run();


// Aula 100
// require_once("vendor/autoload.php");
// $app = new \Slim\Slim();

// $app->config('debug',true);
// $app->get('/',function(){


//  $sql = new Kgdzt\DB\Sql();
// 	$results = $sql->select("SELECT * FROM tb_users");

// 	echo json_encode($results);
// });

// $app->run();

 ?>