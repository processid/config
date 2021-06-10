<?php
// Valeurs de configuration
// Par exemple pour ajouter un tableau associatif de valeurs de config:
// $vars = array('key1'=>'value1','key2'=>'value2');
// Config::addParams($vars);

namespace processid\config;

class Config {
    
    private static $params = array();
    
    // Ajoute des paramètres
    // $array est un tableau associatif
    static public function addParams($array) {
        if (is_array($array)) {
            foreach ($array as $key=>$value) {
                self::$params[$key] = $value;
            }
            return true;
        } else {
            return false;
        }
    }

    // Supprime un paramètre
    static public function removeParam($key) {
        if (isset(self::$params[$key])) {
            unset(self::$params[$key]);
            return true;
        } else {
            return false;
        }
    }

    // Supprime tous les paramètres
    static public function removeParams() {
        self::$params = array();
    }
    
    // Retourne la valeur d'un paramètre
    static public function param($key) {
        if (isset(self::$params[$key])) {
            return self::$params[$key];
        } else {
            return false;
        }
    }
}
?>
