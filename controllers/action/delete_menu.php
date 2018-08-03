<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 03/08/2018
 * Time: 15:40
 */

Menu::delete-menu($_POST['id']);

header('Location: index.php?private=index');