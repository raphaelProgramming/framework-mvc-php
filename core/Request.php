<?php
    namespace app\core;

    class Request {
        
        public $naotem;
        public $naotem2;
        
        public function __construct()
        {
           // Write here commands for Constructor Method
        } 
        
        public function getPath() 
        {
            $path = $_SERVER['REQUEST_URI'] ?? '/';
            $position = strpos($path, '?');

            if($position === false) {
                return $path;
            }
            return substr($path, 0, $position);

            echo '<pre>';
            var_dump( $position );
            echo '</pre>';
        }
        
        public function getMethod() 
        {
            return strtolower($_SERVER['REQUEST_METHOD']);
        }
    }

?>