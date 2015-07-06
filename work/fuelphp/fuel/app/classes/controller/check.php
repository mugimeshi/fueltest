<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of check
 *
 * @author A00172811
 */
class Controller_Check extends Controller
{

    public function action_index()
    {
        echo '<pre>';
        echo 'FuelPHP version:' . Fuel::VERSION . "\n";
        echo '         locale:' . setlocale(LC_ALL, '0') . "\n";
        echo '           date:' . Date::forge()->format('mysql') . "\n";
        echo 'default_charset:' . ini_get('deault_charset') . "\n";
        echo '</pre>';
    }

}
