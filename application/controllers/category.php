<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller {

    // Función de prueba
    public function index() {
        echo "Hi Category controller!";
    }

    // Función para insertar Libro
    public function add_category() {

        // Definimos $data
        $data = array();

        // Validamos que el campo category
        if (empty($_POST['name_category'])) {
            echo "Please enter the name of the category<br>";
        } else {
            $data['name_category'] = $_POST['name_category'];
        }

        // Validamos que el campo description
        if (empty($_POST['description'])) {
            echo "Please enter the description<br>";
        } else {
            $data['description'] = $_POST['description'];
        }

        echo "<pre>";
        var_dump($data);
        echo "</pre>";

        $this->Category_model->add_category($data);
        $this->load->view('add_category_view');

    }





}