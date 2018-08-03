<?php

// Initialisation de l'environnement
include('./config/config_init.php');

// Fonctions
//include('./controllers/fonctions.php');

$smarty->clearAllCache();

//include('./controllers/action/maj_bdd_manuelle.php');
//Variable pour gérer laffichage du portail si Mise en Prod
$mep = false;

// Gestion de Routing
if (isset($_GET['action']) && file_exists(_CTRL_ . 'action/' . str_replace('.', '', $_GET['action']) . '.php')) {
    include(_CTRL_ . 'action/' . $_GET['action'] . '.php');
} else if (isset($_GET['page']) && file_exists(_CTRL_ . str_replace('.', '', $_GET['page']) . '.php')) {
    include(_CTRL_ . $_GET['page'] . '.php');
} else if (isset($_GET['private']) && file_exists(_CTRL_ . 'private/' . $_GET['private'] . '.php')) {
    include(_CTRL_ . 'private/' . $_GET['private'] . '.php');
} else {
    include(_CTRL_ . 'index.php');
}

// Affichage des templates
$smarty->display(_TPL_ . $_SESSION['lang']  .'/header.tpl');

if (isset($_GET['page']) && file_exists(_TPL_ . $_SESSION['lang']  .'/pages/' . str_replace('.', '', $_GET['page']) .
        '.tpl')) {
    $smarty->display(_TPL_ . $_SESSION['lang']  .'/pages/' . $_GET['page'] . '.tpl');
} else if (isset($_GET['private']) && file_exists(_TPL_  .'/private/' . str_replace('.', '', $_GET['private']) .
        '.tpl')) {
    $smarty->display(_TPL_  .'/private/' . $_GET['private'] . '.tpl');
} else {
    $smarty->assign('current_page', "index");
    $smarty->display(_TPL_ . $_SESSION['lang']  .'/pages/index.tpl');
    if (isset($_GET['type']) && $_GET['type'] == "confirmation") {
        $smarty->display(_TPL_ . 'modal/confirmation.tpl');
    } else if (isset($_GET['type']) && $_GET['type'] == "refuse") {
        $smarty->display(_TPL_ . 'modal/refuse.tpl');
    }
}

$smarty->display(_TPL_ . $_SESSION['lang']  .'/footer.tpl');
