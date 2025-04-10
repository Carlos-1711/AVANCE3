<?php
require_once("model/indexmodel.php");
class reservacionescontroller{
    private $indexmodel;
    public function __construct()
    {
        
    }
    public static function reservaciones(){
        require_once("view/reservaciones/reservaciones.php");
    }
}
?>