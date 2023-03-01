<?php
session_start();

require_once "vendor/autoload.php";

$loader = new Twig\Loader\FilesystemLoader('templates');

$twig = new Twig\Environment($loader, [
    "debug" => true
]);

$key = $_GET["key"];
unset($_SESSION["contacts"][$key]);
header('location: index.php');