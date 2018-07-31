<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 31/07/2018
 * Time: 11:42
 */

if (!isset($_SESSION['type']) OR $_SESSION['type'] != "terminal_b") {
    $_SESSION['type'] = "terminal_b";
    $_SESSION['lang'] = "fr";
}