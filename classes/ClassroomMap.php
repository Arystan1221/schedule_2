<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ClassroomMap
 *
 * @author Arystan
 */
class ClassroomMap extends BaseMap {

    public function arrClassrooms() {
        $res = $this->db->query("SELECT classroom_id AS id, name AS value FROM classroom WHERE active=1");
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

}
