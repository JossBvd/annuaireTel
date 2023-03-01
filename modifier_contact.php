<?php
session_start();

require_once "vendor/autoload.php";

$loader = new Twig\Loader\FilesystemLoader('templates');

$twig = new Twig\Environment($loader, [
    "debug" => true
]);

$key = $_GET["key"];



echo $twig->render("modifier_contact.html.twig", [
    "key" => $key
]);