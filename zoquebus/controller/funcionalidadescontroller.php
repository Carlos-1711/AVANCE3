<?php
require_once("model/indexmodel.php");
class funcionalidadescontroller{
    private $indexmodel;
    public function __construct()
    {
        
    }
    public static function funcionalidades(){
        require_once("view/funcionalidades/funcionalidades.php");
    }
}
?>