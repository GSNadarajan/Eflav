<?php

class Database
{
    public static $conn = null;
    /**
     * get the connection 
     *
     * @return connection
     */
    public static function getConnection()
    { 
        if (Database::$conn == null) {

            $username = 'eflavnbb_esakkiraja';
            $password = 'Eflav_@2121';
            $dbname = "eflavnbb_adminfood";
            $servername = "111.118.212.189";

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error); //TODO: Replace this with exception handling
            } else {
                printf("New connection establishing...");
                // echo $servername;
                Database::$conn = $connection; //replacing null with actual connection
                return Database::$conn;
            }
        } else {
            printf("Returning existing establishing...");
            return Database::$conn;
        }
    }
}

Database::getConnection();