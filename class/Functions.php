<?php

require_once 'core/DBConnection.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Utility class
 *
 * @author hmungai
 */
class Functions {

    /**
     * Assists in logging the variuos system events to the specified folder and file
     *
     * @param string $folder_name the name of the log folder
     * @param string $file_name the name of the log file
     * @param string $message the message to be logged
     * @return void
     */
    public function log($message, $folder_name = null, $file_name = null) {
        if (PHP_OS == "Linux") {
            $location = "/home/Halisi_Logs/";
        } else {
            $location = "C:\\Halisi_Logs\\";
        }

        $folder_name = $folder_name . '-' . date("Y-m-d") . DIRECTORY_SEPARATOR;
        $path = $location . $folder_name;
        if (!is_dir($path)) {
            mkdir($path, 0777);
        }

        $file_name = $path . DIRECTORY_SEPARATOR . $file_name . '-' . date("Y-m-d") . '.log';
        file_put_contents($file_name, date("Y-m-d H:i:s") . " - " . $message . PHP_EOL, FILE_APPEND | LOCK_EX);
    }

}
