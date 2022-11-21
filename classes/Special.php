<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Special
 *
 * @author Arystan
 */
class Special extends Table
{
    public $special_id = 0;
    public $name = "";
    public $otdel_id = 0;
    public $active = 1;

    public function validate()
    {
        return false;
    }
}
