<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 02/08/2018
 * Time: 15:36
 */

$smarty->assign('menu_boissons_script', Menu::showMenusFr("Boissons"));

$smarty->assign('menu_nourritures_script', Menu::showMenusFr("Nourritures"));

$smarty->assign('menu_drinks_script', Menu::showMenusEn("Drinks"));

$smarty->assign('menu_foods_script', Menu::showMenusEn("Foods"));