<?php 

 require_once("vendor/autoload.php");

 use \Slim\Slim;
 use \Kgdzt\Page;

 $app = new Slim();

 $app->config('debug', true);

 $app->get('/', function() {

 $page = new Page();

 $page->setTpl("index");
    

 });

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