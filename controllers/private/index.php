<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 03/08/2018
 * Time: 11:56
 */

$user = "user";
$password = "password";

if ((!isset($_POST["user"]) OR $_POST["user"] != $user OR
    !isset($_POST["password"]) OR $_POST["password"] != $password) AND
    (!isset($_SESSION['private']) OR $_SESSION['private'] != "terminal_b_private_access")) {
    header('Location: index.php?private=connexion');
} else {
    $_SESSION['private'] = "terminal_b_private_access";

    $smarty->assign('menu_private_script', Menu::showPrivateMenu());
}