<?php
require 'vendor/autoload.php';
use App\Models\Connect;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbConnection = (new Connect())->getConnection();

?>