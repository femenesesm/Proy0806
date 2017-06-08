<?php

include '../librerias.php';


$oUsu=new Usuario($_REQUEST["nomusuario"],$_REQUEST["clave"]);

if ($oUsu->VerificaLocal())
        echo "Todo Bien";
else
        echo "Todo Mal";

