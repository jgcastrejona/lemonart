<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    public function index() {
        $this->load->view('nosotros_view');
    }

}