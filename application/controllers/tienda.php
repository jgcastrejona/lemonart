<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tienda extends CI_Controller {

    public function index() {
        $this->load->view("tienda_view");
    }

}