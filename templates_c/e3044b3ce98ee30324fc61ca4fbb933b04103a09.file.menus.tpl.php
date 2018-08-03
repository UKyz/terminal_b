<?php /* Smarty version Smarty-3.1.12, created on 2018-08-03 19:52:34
         compiled from "/Applications/MAMP/htdocs/terminal_b/tpl/fr/pages/menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19498572175b6319b6751b50-97309251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3044b3ce98ee30324fc61ca4fbb933b04103a09' => 
    array (
      0 => '/Applications/MAMP/htdocs/terminal_b/tpl/fr/pages/menus.tpl',
      1 => 1533318713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19498572175b6319b6751b50-97309251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b6319b6788cf5_78290959',
  'variables' => 
  array (
    'menu_boissons_script' => 0,
    'menu_nourritures_script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6319b6788cf5_78290959')) {function content_5b6319b6788cf5_78290959($_smarty_tpl) {?><div class="w3_agilits_inner_bottom">
    <div class="wthree_agile_login">
        <ul>
            <li>
                <i class="fa fa-phone" aria-hidden="true"></i> 03 20 01 02 03</li>
            <li>
                <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                <a href="mailto:info@example.com">info@example.com</a>
            </li>
            <li>
                <i class="fa fa-wrench" aria-hidden="true"></i>
                <a href="./index.php?action=change_lang&page=menus">English</a>
            </li>
        </ul>
    </div>
</div>
</div>

<div class="inner-bg"></div>
<!--/banner-inner-->
<!-- gallery -->
<div class="section-w3ls agileits-gallery text-center" id="portfolio">
    <div class="container">
        <h3 class="w3ls-title">
            <span>N</span>otre Carte</h3>
        <br /><br />
        <h4>Apéritifs</h4><br />

        <?php echo $_smarty_tpl->tpl_vars['menu_boissons_script']->value;?>


        <br /><br /><h4>Nourritures</h4><br />

        <?php echo $_smarty_tpl->tpl_vars['menu_nourritures_script']->value;?>


    </div>
</div>
<!-- /gallery -->
<!-- //gallery -->
<script src="./web/js/jquery.tools.min.js"></script>
<script src="./web/js/jquery.mobile.custom.min.js"></script>
<script src="./web/js/jquery.cm-overlay.js"></script>
<script>
    $(document).ready(function () {
        $('.cm-overlay').cmOverlay();
    });
</script>
<!-- //gallery --><?php }} ?>