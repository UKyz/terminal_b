<?php /* Smarty version Smarty-3.1.12, created on 2018-08-03 11:13:32
         compiled from "/Users/victorfauquembergue/Sites/terminal_b/tpl/en/pages/menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17862551005b640a8cc89182-39057635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c35e94e337aa0e77ea84b988c3c18a389f8e72a' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/terminal_b/tpl/en/pages/menus.tpl',
      1 => 1533287611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17862551005b640a8cc89182-39057635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b640a8cc8e3e8_69433567',
  'variables' => 
  array (
    'menu_drinks_script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b640a8cc8e3e8_69433567')) {function content_5b640a8cc8e3e8_69433567($_smarty_tpl) {?><div class="w3_agilits_inner_bottom">
    <div class="wthree_agile_login">
        <ul>
            <li>
                <i class="fa fa-phone" aria-hidden="true"></i> (+33) 03 20 01 02 03</li>
            <li>
                <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                <a href="mailto:info@example.com">info@example.com</a>
            </li>
            <li>
                <i class="fa fa-wrench" aria-hidden="true"></i>
                <a href="./index.php?action=change_lang&page=menus">Français</a>
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
            <span>O</span>ur Menus</h3>
        <br /><br />
        <h4>Aperitifs</h4><br />

        <?php echo $_smarty_tpl->tpl_vars['menu_drinks_script']->value;?>


        <br /><br /><h4>Foods</h4><br />

    </div>
</div><?php }} ?>