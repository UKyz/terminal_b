<?php /* Smarty version Smarty-3.1.12, created on 2018-08-03 11:29:15
         compiled from "/Users/victorfauquembergue/Sites/terminal_b/tpl/fr/pages/menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15349155065b62fbed488859-01521301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d0c6e781b109310a8247e22f61551595510815' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/terminal_b/tpl/fr/pages/menus.tpl',
      1 => 1533288545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15349155065b62fbed488859-01521301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b62fbed4bb9a9_23759004',
  'variables' => 
  array (
    'menu_boissons_script' => 0,
    'menu_nourritures_script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b62fbed4bb9a9_23759004')) {function content_5b62fbed4bb9a9_23759004($_smarty_tpl) {?><div class="w3_agilits_inner_bottom">
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