<?php if (!defined('BASEPATH')) exit('No se permite acceso al script');

/* 
------------------------------- DESCRIPCIÓN DEL CODIGO -------------------------------------

En resumen, este código define la clase "Menu" en PHP. La clase tiene una propiedad privada 
llamada "arr_menu" que contiene un arreglo de opciones de menú, y dos métodos públicos, el 
constructor y "construirMenu".

El constructor de la clase toma como parámetro el arreglo de opciones de menú y lo asigna a 
la propiedad "arr_menu".

El método "construirMenu" construye un menú HTML a partir del arreglo de opciones 
de menú. Primero, inicializa una variable llamada "ret_menu" con el inicio del menú HTML. 
Luego, itera sobre el arreglo de opciones de menú y agrega cada opción al menú HTML. 
Finalmente, agrega el final del menú HTML a la variable "ret_menu" y devuelve el menú HTML 
construido.
-------------------------------------------------------------------------------------------
*/


// Definición de la clase "Menu"
class Menu {

    // Declaración de la propiedad "arr_menu"
    private $arr_menu;

    // Definición del constructor de la clase
    public function __construct($arr) {

        // Asignar el arreglo de opciones de menú a la propiedad "arr_menu"
        $this->arr_menu = $arr;

    }

    // Definición del método "construirMenu"
    public function construirMenu() {

        // Inicializar la variable "ret_menu" con el inicio del menú HTML
        $ret_menu = "<nav><ul>";

        // Iterar sobre el arreglo de opciones de menú y construir el menú HTML
        foreach ($this->arr_menu as $opcion) {
            $ret_menu .= "<li><a href='#'>" . $opcion . "</a></li>";
        }

        // Agregar el final del menú HTML a la variable "ret_menu"
        $ret_menu .= "</ul></nav>";

        // Devolver el menú HTML construido
        return $ret_menu;

    }

}
