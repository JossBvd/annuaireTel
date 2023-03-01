<?php
session_start();

require_once "vendor/autoload.php";

$loader = new Twig\Loader\FilesystemLoader('templates');

$twig = new Twig\Environment($loader, [
    "debug" => true
]);

$key = $_GET["key"];
$ancienContact = $_SESSION["contacts"][$key];


if (empty($_POST)) {
    echo $twig->render("modifier_contact.html.twig", [
        "key" => $key,
        "contact" => $ancienContact
    ]);
} else {
    $_SESSION["contacts"][$key] = $_POST;
    header('location: index.php');
}
