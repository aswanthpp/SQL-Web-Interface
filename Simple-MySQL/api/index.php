<?php
require_once 'includes/DbHandler.php';
date_default_timezone_set("Asia/Kolkata");
require 'Slim/Slim.php';
if (!isset($_SESSION)) {
    session_start();
}
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
function getConnection() {
    $dbhost = 'localhost';
    $dbname = 'db_busigence';
    $dbuser = 'root';
    $dbpass = '';
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}
$app->get('/sampleAPI', function() use($app) {
    $db = new DbHandler();
    $data = array("status"=>'Working Fine');
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->get('/selectAPI', function() use($app) {
    $db = new DbHandler();
    $data = array("status"=>'Working Fine');
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});
$app->run();
