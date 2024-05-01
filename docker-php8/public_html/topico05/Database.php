<?php
class Database {
    static $db = null;
    $host = "mariadb";
    $dbname = "tads";
    $user = "root";
    $password = "root";
    if(self::$db == null) {
        self::$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    }

    function getConnection(){
        return self::$db;
    }

    function closeConnection() {
        self::$db->close();
    }
}