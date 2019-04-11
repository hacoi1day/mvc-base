<?php

/**
 * Class DataBase
 * @package MVC
 * @author havt
 */
class DataBase {
    private static $dbc;

    public static function connect()
    {
        self::$dbc = mysqli_connect('localhost', 'root', '', 'mvc-base');

        if(!self::$dbc) {
            echo 'Không thể kết nối Database';
        } else {
            mysqli_set_charset(self::$dbc, 'utf-8');
            date_default_timezone_set('Asia/Ho_Chi_Minh');
        }
    }
}