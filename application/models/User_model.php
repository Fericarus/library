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






    // Función para obtener usuario






    // Función para actualizar usuario







    // Función para eliminar usuario




}