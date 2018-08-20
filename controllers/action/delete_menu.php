<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 03/08/2018
 * Time: 15:40
 */

Menu::delete_menu($_POST['id']);

header('Location: index.php?private=index&type=delete_menu');