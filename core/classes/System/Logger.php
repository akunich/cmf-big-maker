<?php

namespace System;

class Logger {

    public static function log($message){
        @file_put_contents(Path::getRoot('app/logs/log.txt'), date('Y-m-d h:i:s') .' '. $message . PHP_EOL, FILE_APPEND);
    }

}