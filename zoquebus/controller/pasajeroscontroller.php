<?php
require_once("model/indexmodel.php");
class pasajeroscontroller{
    private $indexmodel;
    public function __construct()
    {
        
    }
    public static function pasajeros(){
        require_once("view/pasajeros/pasajeros.php");
    }
}
?>