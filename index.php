<?php
session_start();
require_once "vendor/autoload.php";

$loader = new Twig\Loader\FilesystemLoader('templates');

$twig = new Twig\Environment($loader, [
    "debug" => true
]);

if (empty($_SESSION["contacts"])) {
    $_SESSION["contacts"] = array();
}

$contacts = $_SESSION["contacts"];

echo $twig->render("index.html.twig", [
    "contacts" => $contacts
]);