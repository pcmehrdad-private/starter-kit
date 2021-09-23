<?php

    if(!function_exists('die_r')){
        function die_r($input = NULL){
            if(empty($input)) die();
            if(is_array($input) || is_object($input)){
                print_r($input);
            } else{
                echo($input);
            }
            die();
        }
    }

    if(!function_exists('getAdminThemeOptions')){
        function getAdminThemeOptions(){
            return true;
        }
    }
