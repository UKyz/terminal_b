<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 03/08/2018
 * Time: 15:16
 */

Menu::change_menu($_POST);

header('Location: index.php?private=index');