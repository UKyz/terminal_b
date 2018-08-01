<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 31/07/2018
 * Time: 11:51
 */

$_SESSION['lang'] = ($_SESSION['lang'] == "fr") ? "en" : "fr";

if (isset($_GET['page']) && file_exists(_TPL_ . $_SESSION['lang']  .'/pages/' .
        str_replace('.', '', $_GET['page']) . '.tpl')) {
    header('Location: ./index.php?page=' . $_GET['page']);
}
else {
    header('Location: ./index.php');
}