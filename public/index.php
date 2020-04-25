<?php
namespace App;
use Framework\Http;
use Framework\Request;
use Framework\Response;
// use Initframework\TestAutoloader;
// use ESAPI;

// Include autoload for composer packages
include_once '../vendor/autoload.php';

// Setup Configurations
include_once '../config.php';

class App
{
   public function __construct()
   {
   
      $http = new Http();

      // set the route for the application

      // set route for controller methods
      // $http->get('/','HomeController@index');
      // $http->get('/users','HomeController@users');

      // set route that are handled here
      // test put from the html
      // $http->put('/test-put-from-html', function ( Request $req, Response $res ) {
      //    $res->send($req->body()->putvar);
      // });
      // // test put from an api client
      // $http->put('/users','HomeController@users');

      // // test the route parameter datatype
      // $http->put('/users/{id:d}', function ( Request $req, Response $res ) {
      //    $res->send($req->uri(). " - " .$req->params()->id);
      // });

      // $http->auth("None")->get('/auth-none', function ( Request $req, Response $res ) {
      //    $res->send("No Auth");
      // });

      $http->auth("Basic")->get('/auth-basic', function ( Request $req, Response $res ) {
         $res->send("Basic Auth");
      });

      $http->auth("Digest")->get('/auth-digest', function ( Request $req, Response $res ) {
         $res->send("Digest Auth");
      });

      // $http->auth('Basic')->get('/home', function ( Request $req, Response $res) {
      //    $res->send($req->uri(). " - " .$req->params()->id. " - " .$req->query()->range);
      // });

      // http::middleware('web')
      // ->get('/route','HomeController@index');

      $http->end();
   }

}

// foreach ($_SERVER as $key => $value) {
//    echo sprintf("%s =======> %s <br><br>", $key, $value);
// }

// Start Application 😉
new App();

// die(json_encode(
//    $_SERVER, 1
// ));