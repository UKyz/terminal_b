<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 31/07/2018
 * Time: 11:51
 */

$_SESSION['lang'] = ($_SESSION['lang'] == "fr") ? "en" : "fr";

header('Location: ./index.php');