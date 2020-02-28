<?php
/*
class DB
{
    
    private static $instance;

    private const HOST = 'localhost';
    private const DB_NAME = 'loginsystem';
    private const USERNAME = 'root';
    private const PASSWORD = '';
    private const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    private function __construct()
    {
    }

    private static function makePDO(): PDO
    {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s',
            static::HOST,
            static::DB_NAME
        );

        return new PDO($dsn, static::USERNAME, static::PASSWORD, static::OPTIONS);
    }

    public static function getPDO(): PDO
    {
        return static::$instance ?? (static::$instance = static::makePDO());
    }
}
*/
?>
<?php

$servernaem = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servernaem, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
?>