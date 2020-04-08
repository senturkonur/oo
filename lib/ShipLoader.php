<?php


class ShipLoader
{
    public function getShips()
    {
        $ships = array();
        $ship1 = new Ship('Jedi Starfighter');
        $ship1->setName('Jedi Starfighter');
        $ship1->setWeaponPower(5);
        $ship1->setJediFactor(15);
        $ship1->setStrength(30);
        $ships['starfighter'] = $ship1;

        $ship2 = new Ship('CloakShape Fighter');
        $ship2->setName('CloakShape Fighter');
        $ship2->setWeaponPower(2);
        $ship2->setJediFactor(2);
        $ship2->setStrength(70);
        $ships['cloakshape_fighter'] = $ship2;

        $ship3 = new Ship('Super Star Destroyer');
        $ship3->setName('Super Star Destroyer');
        $ship3->setWeaponPower(70);
        $ship3->setJediFactor(0);
        $ship3->setStrength(50);
        $ships['super_star_destroyer'] = $ship3;

        $ship4 = new Ship('RZ-1 A-wing interceptor');
        $ship4->setName('RZ-1 A-wing interceptor');
        $ship4->setWeaponPower(4);
        $ship4->setJediFactor(4);
        $ship4->setStrength(50);
        $ships['rz1_a_wing_interceptor'] = $ship4;
        return $ships;
        /*

    }

    /**
     * Our complex fighting algorithm!
     *
     * @return array With keys winning_ship, losing_ship & used_jedi_powers
     */

    }
}