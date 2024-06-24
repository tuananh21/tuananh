<?php
session_start();
require_once "app/config/DB.php";
$conn = DBConnection::getConnection();
require_once "app/App.php";
require_once "app/controllers/BaseController.php";
require_once "app/middleware/AuthMiddleware.php";
$middleware = new AuthMiddleware();
$app = new App($conn, $middleware);


?>