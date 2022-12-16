<?php

/* Creation d'un nouvel utilisateur */
session_start();

require 'user.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$_SESSION['error'] = array();

/* Mise en place des regex pour les messages d'erreurs si caractères non utilisés */
if (!preg_match("/^[a-zA-Z0-9]*$/",$name))
{
    $_SESSION['name'] = "Seules les lettres minuscules, majuscules et les chiffres sont autorisé dans le champ";
    $_SESSION['error'][0] = $_SESSION['name'];
}

if (!preg_match("/^[a-zA-Z0-9]*$/",$lastname))
{
    $_SESSION['lastname'] = "Seules les lettres minuscules, majuscules et les chiffres sont autorisé dans le champ";
    $_SESSION['error'][1] = $_SESSION['lastname'];
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['email'] = "Entrez un email";
    $_SESSION['error'][2] = $_SESSION['email'];
}

if (!preg_match("^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$",$password))
{
    $_SESSION['password'] = "Entrez un mot de passe";
    $_SESSION['error'][3] = $_SESSION['password'];
}

/* Mise en place d'une fonction empty pour les messages d'erreurs si champs vides */
if (empty($name))
{
    $_SESSION['no_name'] = "vous ne pouvez pas laisser le champ vide";
    $_SESSION['error'][4] = $_SESSION['no_name'];
}

if (empty($lastname))
{
    $_SESSION['no_lastname'] = "vous ne pouvez pas laisser le champ vide";
    $_SESSION['error'][5] = $_SESSION['no_lastname'];
}

if (empty($email))
{
    $_SESSION['no_email'] = "vous ne pouvez pas laisser le champ vide";
    $_SESSION['error'][6] = $_SESSION['no_email'];
}

if (empty($password))
{
    $_SESSION['no_password'] = "vous ne pouvez pas laisser le champ vide";
    $_SESSION['error'][7] = $_SESSION['no_password'];
}


if (empty($_SESSION['error']))
{
    $user = New User("$name", "$lastname", "$email",  "$password");

    require 'function_insert_data_user.php';

    insert_data_user($user);

    header('Location: createUser.php');
}

/* Garder les entrés de l'utilisateur si justes */
else 
{
    $_SESSION['keep_name'] = "$name";
    $_SESSION['keep_lastname'] = "$lastname";
    $_SESSION['keep_email'] = "$email";
    $_SESSION['keep_password'] = "$password";
    header('Location: createUser.php');
}

?>