
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
        {$menu_private_script}
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
</script>