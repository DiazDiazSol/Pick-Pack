<?php
/**
 * Función que retorna un array con las secciones que pueden ser visitadas en el sitio
 */
function secciones_validas(){
    $secciones = ["inicio", "productos", "categoria",
     "crear_categoria", "editar_categoria", "borrar_categoria", "borrar_categoria_acc", 
     "crear_producto", "editar_producto", "borrar_producto", "borrar_producto_acc" ];
    return $secciones;
}

/**
 * Función que retorna un array con las secciones que aparecen en el menu principal
 */
function secciones_menu(){
    $secciones = ["inicio", "productos", "categoria"];    
    return $secciones;
}

?>