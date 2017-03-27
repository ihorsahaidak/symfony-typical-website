<?php

class Route
{
    private $_uri = [];
    private $_method = [];
    private $_func = [];

    public function add($uri, $method = null, $func = null)
    {
        $this->_uri[] = '/' . trim($uri, '/');
        if ($method != null){
            $this->_method[] = $method;
        }
        $this->_func[] = $method != null ? $func : 0;
    }
    public function action()
    {
        $uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
        foreach ($this->_uri as $key => $value)
        {
            if(preg_match("#^$value$#", $uriGetParam)){
                if (is_string($this->_method[$key])){
                    $userMethod = $this->_method[$key];
                    $cls = new $userMethod();
                    if($this->_func[$key] !== 0) {
                        call_user_func(array($cls, $this->_func[$key]));
                    }
                }
            }
        }
    }
}