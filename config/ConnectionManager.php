<?php

abstract class ConnectionManager
{
    protected function connectSqlSrv()
    {
        try {
            $hostname = "localhost";
            $dbname = "sirdis";
            $username = "root";
            $pw = "";
            return $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
          } catch (PDOException $e) {
            echo "Failed to get DB handle: " . $e->getMessage() . "\n";
            exit;
          }
    }
}
?>