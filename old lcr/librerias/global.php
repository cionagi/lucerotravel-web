<?php
function parametro_cabecera($variable){
    
    if(isset($GLOBALS[$variable])){
        echo $GLOBALS[$variable];
    }else{
        echo "desconocido";
    }
}

function variable_key($variable){
    if(isset($GLOBALS[$variable])){
        echo "".$GLOBALS[$variable]."";
    }else{
        echo "nepix,Chile,html5,jquery,php,sitio web,hosting,proyectos,tecnologia,website,sotfware,diseños,empresas,pymes,sistemas";
    }
}
?>