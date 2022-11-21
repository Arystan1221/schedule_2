<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Classroom
 *
 * @author Arystan
 */
class Classroom extends Table {

    public $classroom_id = 0;
    public $name = "";
    public $active = 1;

    public function validate() {
        return false;
    }

}
