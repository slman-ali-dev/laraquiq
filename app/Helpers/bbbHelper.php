<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class bbbHelper
{
    public static function xmlToArray($xml)
    {
        $json  = json_encode($xml);
        $data = json_decode($json, true);

        return $data;
    }


    /**
     * 
     * ping server 
     * params: url (string)
     */
    public static function isServerAlive($url, $port=80, $timeout = 3)
    {
        $fsock = true;

        try {
            $fsock = fsockopen($url, $port, $errno, $errstr, $timeout);
        } catch (\Throwable $th) {
            $fsock = false;
        }

        if ($fsock) {
            return true;
        } else {
            return false;
        }
    }

}
