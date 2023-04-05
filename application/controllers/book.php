<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

    // Función de prueba
    public function index()
    {
        echo "hola Books controller";
    }

    // Función para insertar Libro
    public function add_book() {

        // Definimos $data
        $data = array();

        // Validamos que el campo nombre
        if (empty($_POST['name'])) {
            echo "Please enter the name of the book<br>";
        } else {
            $data['name'] = $_POST['name'];
        }

        // Validamos que el campo author
        if (empty($_POST['author'])) {
            echo "Please enter the name of the author<br>";
        } else {
            $data['author'] = $_POST['author'];
        }

        // Validamos que el campo category
        if (empty($_POST['id_category1'])) {
            echo "Please enter the category of the book<br>";
        } else {
            $data['id_category1'] = $_POST['id_category1'];
        }

        // Validamos que el campo published_date
        if (empty($_POST['published_date'])) {
            echo "Please enter the publication date<br>";
        } else {
            $data['published_date'] = $_POST['published_date'];
        }

        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";

        $this->Book_model->add_book($data);
        $this->load->view('add_book_view');
    }
}
