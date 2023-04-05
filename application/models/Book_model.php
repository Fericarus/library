<?php

class Book_model extends CI_Model {

    // Función para insertar Libro
    public function add_book($data) {
        $data = array(
            'name' => $data['name'],
            'author' => $data['author'],
            'id_category1' => $data['id_category1'],
            'published_date' => $data['published_date']
        );
        $this->db->insert('books', $data);
    }

    // Función para obtener Libro
    public function get_book() {
        $query = $this->db->query("SELECT * FROM books");
        return $query->result_array();
    }

    // Función para actualizar Libro
    public function update_book($data) {
        $data = array(
            'name' => $data['name'],
            'author' => $data['author'],
            'id_category1' => $data['id_category1'],
            'published_date' => $data['published_date']
        );
        $this->db->where("id_book", $data['id_book']);
        $this->db->insert('books', $data);
    }






    // Función para eliminar Libro
    public function delete_book($data) {
        $this->db->query("DELETE FROM books WHERE id_book=" . $data);
    }



}