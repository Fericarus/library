<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->view('inicio');
    }

    // Redirigir a Menu libros
    public function inicio_books() {
        $this->load->view('menu_books');
    }

    public function inicio_users() {
        $this->load->view('menu_users');
    }

    public function inicio_categories() {
        $this->load->view('menu_categories');
    }

}