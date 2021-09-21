<?php

    if(!function_exists('die_r')){
        function die_r($in = NULL){
            if(empty($in)) die();
            if(is_array($in) || is_object($in)){
                print_r($in);
            } else{
                echo($in);
            }
            die();
        }
    }

    if(!function_exists('getAdminThemeOptions')){
        function getAdminThemeOptions(){
            return true;
        }
    }
