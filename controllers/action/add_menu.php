<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 03/08/2018
 * Time: 16:25
 */

Menu::add_menu($_POST);

header('Location: index.php?private=index&type=add_menu');