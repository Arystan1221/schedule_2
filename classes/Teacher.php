<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Teacher
 *
 * @author Arystan
 */
class Teacher extends Table
{
    public $user_id = 0;
    public $otdel_id = 0;

    public function validate()
    {
        if (!empty($this->otdel_id)) {
            return true;
            }
        return false;
    }
}
