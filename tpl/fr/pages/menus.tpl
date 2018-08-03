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

        {$menu_boissons_script}

        <br /><br /><h4>Nourritures</h4><br />

        {$menu_nourritures_script}

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
<!-- //gallery -->