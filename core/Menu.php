<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 02/08/2018
 * Time: 15:35
 */

class Menu
{
    public static function showMenusFr($type) {
        $script_menu = "";

        global $bdd;
        $req = $bdd->prepare('SELECT * FROM menus WHERE type = :type ORDER BY type2');
        $req->execute(array(
            'type' => $type
        ));

        $script_menu .= "<table>
                            <thead>
                                <th>Nom</th>
                                <th>Détail</th>
                                <th>Prix</th>
                            </thead>
                            <tbody>";

        $donnees = $req->fetch();
        $type2 = $donnees['type2'];

        $script_menu .= "<tr class='title'>
                            <td colspan='3' class='title'>Nos $type2</td>
                        </tr>";

        while ($donnees) {

            if ($type2 != $donnees['type2']) {
                $type2 = $donnees['type2'];
                $script_menu .= "<tr class='title'>
                            <td colspan='3' class='title'>Nos $type2</td>
                        </tr>";
            }

            $script_menu .= "<tr>
                                    <td>" . explode('/', $donnees['name'])[0] . "</td>
                                    <td>" . explode('/', $donnees['detail'])[0] . "</td>
                                    <td>" . number_format($donnees['price'], 2) . "€</td>
                                </tr>";

            $donnees = $req->fetch();
        }

        $script_menu .= "</tbody>
                        </table>";

        return $script_menu;
    }

    public static function showMenusEn($type) {
        $script_menu = "";

        global $bdd;
        $req = $bdd->prepare('SELECT * FROM menus WHERE type_en = :type_en ORDER BY type2');
        $req->execute(array(
            'type_en' => $type
        ));

        $script_menu .= "<table>
                            <thead>
                                <th>Name</th>
                                <th>Detail</th>
                                <th>Price</th>
                            </thead>
                            <tbody>";

        $donnees = $req->fetch();
        $type2 = $donnees['type2_en'];

        $script_menu .= "<tr class='title'>
                            <td colspan='3' class='title'>Our $type2</td>
                        </tr>";

        while ($donnees) {

            if ($type2 != $donnees['type2_en']) {
                $type2 = $donnees['type2_en'];
                $script_menu .= "<tr class='title'>
                            <td colspan='3' class='title'>Our $type2</td>
                        </tr>";
            }

            $script_menu .= "<tr>
                                    <td>" . explode('/', $donnees['name'])[1] . "</td>
                                    <td>" . explode('/', $donnees['detail'])[1] . "</td>
                                    <td>" . number_format($donnees['price'], 2) . "€</td>
                                </tr>";

            $donnees = $req->fetch();
        }

        $script_menu .= "</tbody>
                        </table>";

        return $script_menu;
    }

    public static function showPrivateMenu() {

        $script_menu = "";

        global $bdd;
        $req = $bdd->query('SELECT * FROM menus ORDER BY type AND type2');

        $script_menu .= "<table>
                            <thead>
                                <th>Nom (FR - EN)</th>
                                <th>Détail (FR - EN)</th>
                                <th>Type (FR - EN)</th>
                                <th>Type 2 (FR - EN)</th>
                                <th>Prix (en €)</th>
                                <th>Commandable</th>
                                <th></th>
                            </thead>
                            <tbody>";

        $donnees = $req->fetch();
        $type2 = $donnees['type2'];

        $script_menu .= "<tr class='title'>
                            <td colspan='7' class='title'>Nos $type2</td>
                        </tr>";

        while ($donnees) {

            if ($type2 != $donnees['type2']) {
                $type2 = $donnees['type2'];
                $script_menu .= "<tr class='title'>
                            <td colspan='7' class='title'>Nos $type2</td>
                        </tr>";
            }

            $script_menu .= "<tr>
                                <form action=\"index.php?action=change_menu\" method=\"post\">
                                    <input type='hidden' name='id' value='" . $donnees['id'] . "'>
                                    <td><input type=\"text\" class=\"name\" name=\"name_fr\" 
                                    value='" . explode('/', $donnees['name'])[0] . "'
                                    required=\"\">
                                    <input type=\"text\" class=\"name\" name=\"name_en\" 
                                    value='" . explode('/', $donnees['name'])[1] . "'
                                    required=\"\"></td>
                                    <td><textarea name=\"detail_fr\" required=\"\">" .
                                    explode('/', $donnees['detail'])[0] . "</textarea>
                                    <textarea name=\"detail_en\" required=\"\">" .
                                    explode('/', $donnees['detail'])[1] . "</textarea></td>
                                    <td><input type=\"text\" class=\"name\" name=\"type_fr\" 
                                    value='" . $donnees['type'] . "'
                                    required=\"\">
                                    <input type=\"text\" class=\"name\" name=\"type_en\" 
                                    value='" . $donnees['type_en'] . "'
                                    required=\"\"></td>
                                    <td><input type=\"text\" class=\"name\" name=\"type2_fr\" 
                                    value='" . $donnees['type2'] . "'
                                    required=\"\">
                                    <input type=\"text\" class=\"name\" name=\"type2_en\" 
                                    value='" . $donnees['type2_en'] . "'
                                    required=\"\"></td>
                                    <td><input type=\"text\" class=\"name\" name=\"price\" 
                                    value='" . $donnees['price'] . "'
                                    required=\"\"></td>
                                    <td><input type='checkbox' name='can_command' value='yes'";

            if ($donnees['can_command'] == "yes") {
                $script_menu .= "checked";
            }

            $script_menu .= ">      </td>
                                <td><input type='submit' value='MODIFIER'></form>
                                <form action=\"index.php?action=delete_menu\" method=\"post\">
                                <input type='hidden' name='id' value='" . $donnees['id'] . "'>
                                <input type='submit' value='SUPPRIMER'></form></td>
                                </tr>";

            $donnees = $req->fetch();
        }

        $script_menu .= "</tbody>
                        </table>";

        return $script_menu;

    }

    public static function change_menu($tab) {

        global $bdd;
        $req = $bdd->prepare('UPDATE menus SET name = :name, detail = :detail, price = :price, 
            type = :type, type_en = :type_en, type2 = :type2, type2_en = :type2_en, can_command = :can_command 
            WHERE id = :id');
        $req->execute(array(
            'name' => $tab['name_fr'] . '/' . $tab['name_en'],
            'detail' => $tab['detail_fr'] . '/' . $tab['detail_en'],
            'price' => $tab['price'],
            'type' => $tab['type_fr'],
            'type_en' => $tab['type_en'],
            'type2' => $tab['type2_fr'],
            'type2_en' => $tab['type2_en'],
            'can_command' => ($tab['can_command']) ? "yes" : "no",
            'id' => $tab['id']));

    }

    public static function delete_menu($id) {
        global $bdd;
        $req = $bdd->prepare('DELETE FROM menus WHERE id = :id');
        $req->execute(array('id' => $id));
    }
}