<?php /* Smarty version Smarty-3.1.12, created on 2018-08-04 16:06:43
         compiled from "/Applications/MAMP/htdocs/terminal_b/tpl/private/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13947616415b6496bb0bac78-01309804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672c33300204c177f86c76683909230497cea388' => 
    array (
      0 => '/Applications/MAMP/htdocs/terminal_b/tpl/private/index.tpl',
      1 => 1533391600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13947616415b6496bb0bac78-01309804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b6496bb100197_38408176',
  'variables' => 
  array (
    'menu_private_script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b6496bb100197_38408176')) {function content_5b6496bb100197_38408176($_smarty_tpl) {?>
<div class="w3_agilits_inner_bottom">
    <div class="wthree_agile_login">
        <ul>
            <li>
                <i class="fa fa-phone" aria-hidden="true"></i> 03 20 01 02 03</li>
            <li>
                <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                <a href="mailto:info@example.com">info@example.com</a>
            </li>
        </ul>
    </div>
</div>
</div>

<!-- contact -->
<div class="contact-bottom section-w3ls main-pos">
    <div class="container">
        <h3 class="w3ls-title">
            <span>P</span>age Privé</h3>
        <br />
        <br />
    </div>

    <div class="tab">
        <button class="tablinks" onclick="openCity('change_menu')">Modifier le menu</button>
        <button class="w3-bar-item w3-button" onclick="openCity('add_menu')">Ajouter au menu</button>
    </div>

    <div class="container city" id="change_menu">
        <h4>Changer le menu</h4>
        <br />
        <?php echo $_smarty_tpl->tpl_vars['menu_private_script']->value;?>

    </div>

    <div class="container city" id="add_menu" style="display:none">
        <div class="contact-right-w3l" style="margin-top: -50px">
            <h4>Ajouter au menu</h4>
            <br />
            <form action="index.php?action=add_menu" method="post">
                <div class="contact-input">
                    <input type="text" class="name" name="name_fr" placeholder="Nom Français" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="name_en" placeholder="Nom Anglais" required="">
                </div>
                <div class="contact-input">
                    <textarea placeholder="Détail Français" required="" name="detail_fr"></textarea>
                </div>
                <div class="contact-input">
                    <textarea placeholder="Détail Anglais" required="" name="detail_en"></textarea>
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="type_fr"
                           placeholder="Type 1 Français (Boissons, Nourritures ...)" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="type_en"
                           placeholder="Type 1 Anglais (Drinks, Foods ...)" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="type2_fr"
                           placeholder="Type 2 Français (Bières, Boissons fraîches ...)" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="type2_en"
                           placeholder="Type 2 Anglais (Beers, Cold drinks ...)" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="price" placeholder="Prix (en €)" required="">
                </div>
                <div class="contact-input">
                    <input type="checkbox" class="name" name="can_command" value="yes">
                    <label>Commandable</label>
                </div>
                <input type="submit" value="ENVOYER">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script>
    function openCity(cityName) {
        let i;
        const x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
</script><?php }} ?>