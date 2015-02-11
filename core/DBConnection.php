<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author hmungai
 */
class DBConnection {

    public function getConnection() {
        $config = parse_ini_file("config.ini");
        $host = $config['host'];
        $username = $config['username'];
        $password = $config['password'];
        $db = $config['database'];

        try {
            $con = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            return $con;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
