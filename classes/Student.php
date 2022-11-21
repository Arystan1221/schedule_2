<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Student
 *
 * @author Arystan
 */
class Student extends Table
{
    public $user_id = 0;
    public $gruppa_id = 0;
    public $num_zach = "";

    public function validate()
    {
        if (!empty($this->gruppa_id)) {
            return true;
            }
        return false;
    }
}
