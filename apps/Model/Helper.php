<?php
class Helper{
    protected $config;
    protected $session;
    
    public function __construct() {
        $this->session = new \NG\Session;
        $this->config = \NG\Registry::get('config');
    }
    
    public function getArrayValue($array = null, $key = null, $default = ""){
        $result = $default;
        if ($array !== null){
            if (is_array($array)){
                if (array_key_exists($key, $array)){
                    $result = $array[$key];
                }
            }
        }
        return $result;
    }
}