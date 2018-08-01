<?php /* Smarty version Smarty-3.1.12, created on 2018-08-01 14:01:40
         compiled from "/Users/victorfauquembergue/Sites/terminal_b/tpl/en/pages/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1492715525b619de8d8b949-57655195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab786d3cc9a5a80dfc804b8318cefef42a94c02' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/terminal_b/tpl/en/pages/contact.tpl',
      1 => 1533124846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1492715525b619de8d8b949-57655195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b619de8df2804_04857657',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b619de8df2804_04857657')) {function content_5b619de8df2804_04857657($_smarty_tpl) {?><div class="w3_agilits_inner_bottom">
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
                <a href="./index.php?action=change_lang&page=contact">Français</a>
            </li>
        </ul>
    </div>
</div>
</div>
<!-- contact -->
<div class="contact-bottom section-w3ls main-pos" id="contact">
    <div class="container">
        <h3 class="w3ls-title">
            <span>c</span>ontact us</h3>
        <div class="contact-right-w3l">
            <form action="#" method="post">
                <div class="contact-input">
                    <input type="text" class="name" name="name" placeholder="First Name" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="name" placeholder="Last Name" required="">
                </div>
                <div class="contact-input">
                    <input type="email" class="name" name="name" placeholder="Email" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="name" placeholder="Subject" required="">
                </div>
                <div class="contact-input">
                    <textarea placeholder="Your Message" required=""></textarea>
                </div>
                <input type="submit" value="SEND MESSAGE">
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="contact-main">
            <div class="col-md-6 col-sm-6 col-xs-6 contact-left-w3ls">
                <h3 class="h3-w3l">contact info</h3>
                <div class="mail contact-grid-agileinfo c1">
                    <div class="contact-icon-wthree">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="contact-text-agileinfo">
                        <h4>Mail us</h4>
                        <p>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="call contact-grid-agileinfo c2">
                    <div class="contact-icon-wthree">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                    </div>
                    <div class="contact-text-agileinfo">
                        <h4>Call us</h4>
                        <p>+18044261149</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="visit contact-grid-agileinfo">
                    <div class="contact-icon-wthree">
                        <span class="fa fa-home" aria-hidden="true"></span>
                    </div>
                    <div class="contact-text-agileinfo">
                        <h4>Visit us</h4>
                        <p>sed do eiusmod vally</p>
                        <p>New york,U.S.A</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 map">
                <h3 class="h3-w3l">on the map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.86654334463!2d-74.25818682528057!3d40.70531100753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1492489108677"
                        allowfullscreen></iframe>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //contact -->
<!-- start-smooth-scrolling -->
<script src="./web/js/move-top.js"></script>
<script src="./web/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
     var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
     };
     */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="./web/js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- navigation  -->
<script src="./web/js/main.js"></script>
<!-- //navigation --><?php }} ?>