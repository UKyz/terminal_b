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
}