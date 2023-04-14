<?php
class session { 
    public static function init(){
        session_start();
    }
    public static function set($key, $val){
        $_SESSION[$key]=$val;
    }
    public static function destroy(){
        session_destroy();
    }
    public static function unset($key){
        session_unset($key);
    }
}
?>