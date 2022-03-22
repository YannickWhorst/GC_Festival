<?php

include '../config/database.php';

    function db_connect()
    {
        // $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        // return $mysqli;
        $db = new PDO("mysql:host=localhost;dbname=gc_festival", "root", "");
        return $db;
    }

    function db_getData($query)
    {
        $db = db_connect();
        $queryPDO = $db->prepare($query);
        $queryPDO-> execute();
        $db = null;
        return $queryPDO;
        // $mysqli = db_connect();
        // $result = $mysqli->query($query);
        // $mysqli -> close();
        // return $result;
    }

    function db_insertData($query)
    {
        $db = db_connect();
        $result = $db->prepare($query);
        $result->execute();
        if($result === true){

            return sus;

        }


        // $mysqli = db_connect();
        // $result = $mysqli->query($query);
        // if ($result === TRUE)
        // {
        //     return mysqli_insert_id($mysqli);
        // } else
        // {
        //     $result = "Error: " . $query . "<br>" . $mysqli->error;
        // }
        // $mysqli->close();
        // return $result;
    }

?>