<?php
abstract class Db {
    private static $db;

    public static function getConnection() {
        if (self::$db === null) {
            self::$db = new PDO('mysql:host=localhost;dbname=lab2', "root", "root");
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$db;
    }
}
?>
