<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    // Función de prueba
    public function index()
    {
        echo "Hi User controller!";
    }

    public function show_add_user() {
        $this->load->view('add_user_view');
    }

    // Función para insertar user
    public function add_user()
    {

        // Validamos que el campo category
        if (empty($_POST['name_user'])) {
            echo "please enter username<br>";
        } else {
            $data['name_user'] = $_POST['name_user'];
        }

        // Validamos que el campo description
        if (empty($_POST['email'])) {
            echo "please enter email<br>";
        } else {
            $data['email'] = $_POST['email'];
        }

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $this->User_model->add_user($data);
        $this->load->view('add_user_view');

    }

    // Función para obtener Libro
    public function get_user() {
        $data['users'] = $this->User_model->get_user();
        $this->load->view('get_users_view', $data);
    }

    // Función para editar user
    public function update_user() {
        echo "update_user()";
    }

    // Función para eliminar category
    public function delete_user() {
        echo "delete_user()";
    }


}
