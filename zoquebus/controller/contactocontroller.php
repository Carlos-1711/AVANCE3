<?php
require_once("model/indexmodel.php");
class contactocontroller{
    private $indexmodel;
    public function __construct()
    {
        
    }
    public static function contacto(){
        require_once("view/contacto/contacto.php");
    }
}
?>