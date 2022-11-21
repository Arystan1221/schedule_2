<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SpecialMap
 *
 * @author Arystan
 */
class SpecialMap extends BaseMap {

    public function arrSpecials() {
        $res = $this->db->query("SELECT special_id AS id, name AS value FROM special");
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

}
