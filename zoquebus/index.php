<?php
require_once("config.php");
require_once("controller/indexcontroller.php");
require_once("controller/nosotroscontroller.php");
require_once("controller/destinoscontroller.php");
require_once("controller/extrascontroller.php");
require_once("controller/pasajeroscontroller.php");
require_once("controller/atencionclientecontroller.php");
require_once("controller/contactocontroller.php");
require_once("controller/funcionalidadescontroller.php");
require_once("controller/servicioscontroller.php");
require_once("controller/reservacionescontroller.php");
if(isset($_GET['i'])){
    $metodo=$_GET['i'];
    if(method_exists('indexcontroller',$metodo)){
        indexcontroller::{$metodo}();
    }
}
else{
    if(isset($_GET['n'])){
        $metodo=$_GET['n'];
        if(method_exists('nosotroscontroller',$metodo)){
            nosotroscontroller::{$metodo}();
        }
    }
    else{
        if(isset($_GET['d'])){
            $metodo=$_GET['d'];
            if(method_exists('destinoscontroller',$metodo)){
                destinoscontroller::{$metodo}();
            }
        }
        else{
            if(isset($_GET['e'])){
                $metodo=$_GET['e'];
                if(method_exists('extrascontroller',$metodo)){
                    extrascontroller::{$metodo}();
                }
            }
            else{
                if(isset($_GET['p'])){
                    $metodo=$_GET['p'];
                    if(method_exists('pasajeroscontroller',$metodo)){
                        pasajeroscontroller::{$metodo}();
                    }
                }
                if(isset($_GET['a'])){
                    $metodo=$_GET['a'];
                    if(method_exists('atencionclientecontroller',$metodo)){
                        atencionclientecontroller::{$metodo}();
                    }
                }
                else{
                    if(isset($_GET['c'])){
                        $metodo=$_GET['c'];
                        if(method_exists('contactocontroller',$metodo)){
                            contactocontroller::{$metodo}();
                        }
                    }
                    else{
                        if(isset($_GET['f'])){
                            $metodo=$_GET['f'];
                            if(method_exists('funcionalidadescontroller',$metodo)){
                                funcionalidadescontroller::{$metodo}();
                            }
                        }
                        else{
                            if(isset($_GET['s'])){
                                $metodo=$_GET['s'];
                                if(method_exists('servicioscontroller',$metodo)){
                                    servicioscontroller::{$metodo}();
                                }
                            }
                            else{
                                if(isset($_GET['r'])){
                                    $metodo=$_GET['r'];
                                    if(method_exists('reservacionescontroller',$metodo)){
                                        reservacionescontroller::{$metodo}();
                                    }
                                }
                                else{
                                    indexcontroller::index();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>