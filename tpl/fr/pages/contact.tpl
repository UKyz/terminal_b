<div class="w3_agilits_inner_bottom">
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
                <a href="./index.php?action=change_lang&page=contact">English</a>
            </li>
        </ul>
    </div>
</div>
</div>

<!-- contact -->
<div class="contact-bottom section-w3ls main-pos" id="contact">
    <div class="container">
        <h3 class="w3ls-title">
            <span>N</span>ous Contacter</h3>
        <div class="contact-right-w3l">
            <form action="#" method="post">
                <div class="contact-input">
                    <input type="text" class="name" name="name" placeholder="Prénom" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="name" placeholder="Nom" required="">
                </div>
                <div class="contact-input">
                    <input type="email" class="name" name="name" placeholder="Email" required="">
                </div>
                <div class="contact-input">
                    <input type="text" class="name" name="name" placeholder="Sujet" required="">
                </div>
                <div class="contact-input">
                    <textarea placeholder="Votre Message" required=""></textarea>
                </div>
                <input type="submit" value="ENVOYER">
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="contact-main">
            <div class="col-md-6 col-sm-6 col-xs-6 contact-left-w3ls">
                <h3 class="h3-w3l">info contact</h3>
                <div class="mail contact-grid-agileinfo c1">
                    <div class="contact-icon-wthree">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="contact-text-agileinfo">
                        <h4>Envoyez nous un email</h4>
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
                        <h4>Appellez nous</h4>
                        <p>03 20 01 02 03</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="visit contact-grid-agileinfo">
                    <div class="contact-icon-wthree">
                        <span class="fa fa-home" aria-hidden="true"></span>
                    </div>
                    <div class="contact-text-agileinfo">
                        <h4>Rendez nous visite</h4>
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
<!-- //navigation -->