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
}
