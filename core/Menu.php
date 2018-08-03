<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 02/08/2018
 * Time: 15:35
 */

class Menu
{
    public static function showMenu() {
        $script_menu = "";

        global $bdd;
        $req = $bdd->prepare('SELECT * FROM menus WHERE type = :type');
        $req->execute(array(
            'type' => "boisson"
        ));

        $script_menu .= "<table>
                            <thead>
                                <th>Nom</th>
                                <th>Detail</th>
                                <th>Prix</th>
                            </thead>
                            <tbody>";

        while ($donnees = $req->fetch()) {
            $script_menu .= "<tr>
                                    <th>" . $donnees['name'] . "</th>
                                    <th>" . $donnees['detail'] . "</th>
                                    <th>" . number_format($donnees['price'], 2) . "€</th>
                                </tr>";
        }

        $script_menu .= "</tbody>
                        </table>";

        return $script_menu;
    }
}