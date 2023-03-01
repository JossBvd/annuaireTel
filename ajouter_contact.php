<?php
session_start();

require_once "vendor/autoload.php";

$loader = new Twig\Loader\FilesystemLoader('templates');

$twig = new Twig\Environment($loader, [
    "debug" => true
]);

if (empty($_POST)) {
    echo $twig->render("ajouter_contact.html.twig");
} else {
    $contact = $_POST;
    $_SESSION["contacts"][] = $contact;
    header('location: index.php');
}