<?php

class User_model extends CI_Model {

     // Función para insertar usuario
     public function add_user($data) {
        $data = array(
            'name_user' => $data['name_user'],
            'email' => $data['email']
        );
        $this->db->insert('users', $data);
    }

    // Función para obtener Libro
    public function get_user() {
        $query = $this->db->query("SELECT * FROM users");
        return $query->result_array();
    }






    // Función para actualizar usuario







    // Función para eliminar Libro
    public function delete_user($data) {
        $this->db->query("DELETE FROM users WHERE id_user=" . $data);
    }




}