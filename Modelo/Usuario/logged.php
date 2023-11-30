<?php

if(isset($_SESSION["logged"]) and $_SESSION["logged"]["connected"] == True)
{
    if($_SESSION["1"]){
        include("../../Modelo/Componentes/headerIndexA.php");
    }
    else{
        include("../../Modelo/Componentes/headerIndexU.php");
    }
}
else
{   
}

?>