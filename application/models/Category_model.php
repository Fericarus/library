<?php

class Category_model extends CI_Model {

     // Función para insertar categoría
     public function add_category($data) {
        $data = array(
            'name_category' => $data['name_category'],
            'description' => $data['description']
        );
        $this->db->insert('categories', $data);
    }





    // Función para obtener categoría






    // Función para actualizar categoría







    // Función para eliminar categoría




}