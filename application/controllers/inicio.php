<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->view('inicio');
    }

    public function inicio_books() {
        $this->load->view('inicio_books');
    }

}