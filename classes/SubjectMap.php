<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of SubjectMap
 *
 * @author Arystan
 */
class SubjectMap extends BaseMap{
    public function arrSubjects(){
        $res = $this->db->query("SELECT subject_id AS id, name AS value FROM subject");
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
