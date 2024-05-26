<?php
    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");
    $categoria = new Categoria();

    switch($_GET["op"]){
       /* TODO: Formato para llenar combo en formato HTML */
       case "combo":
        $datos = $categoria->get_categoria();
        $html="";
        $html.="<option value=''>Seleccionar</option>";
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $html.= "<option value='".$row['cat_id']."'>".$row['cat_nom']."</option>";
            }
            echo $html;
        }
        break;
    }
?>