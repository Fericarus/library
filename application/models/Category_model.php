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

    // Función para obtener Libro
    public function get_category() {
        $query = $this->db->query("SELECT * FROM categories");
        return $query->result_array();
    }






    // Función para actualizar categoría







    // Función para eliminar Libro
    public function delete_category($data) {
        $this->db->query("DELETE FROM categories WHERE id_category=" . $data);
    }




}