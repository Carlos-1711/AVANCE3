<?php
require_once("model/indexmodel.php");
class servicioscontroller{
    private $indexmodel;
    public function __construct()
    {
        
    }
    public static function servicios(){
        require_once("view/servicios/servicios.php");
    }
}
?>