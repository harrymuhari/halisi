<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * PDO interface to db
 *
 * @author hmungai
 */
class DBConnection {

    /**
     * Opens a connection to the database
     *
     * @return object $con the PDO connection instance
     */
    public function getConnection() {
        $functions = new Functions();

        $config = parse_ini_file("config.ini");
        $host = $config['host'];
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['database'];

        try {
            $con = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            $functions->log("Connection successful", "DBLOG", "DB_CON_SUCCESS");
            return $con;
        } catch (PDOException $ex) {
            $functions->log($ex->getMessage(), "DBLOG", "DB_CON_EXCEPTION");
        }
    }

}
