<?php

class Book_model extends CI_Model {

    // Función para insertar Libro
    public function add_book() {
        $data = array(
            'name' => 'The Lord of the Rings',
            'author' => 'Fernando Arriola',
            'id_category1' => 1,
            'published_date' => '2013/04/04'
        );
        $this->db->insert('books', $data);
    }





    // Función para obtener Libro






    // Función para actualizar Libro







    // Función para eliminar Libro




}