<?php
    class JsonHelper {
        public static function getJson($key, $value){
            $out = array($key => $value);
            return json_encode($out);
        } 
    } 
?>