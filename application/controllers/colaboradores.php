<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

    public function index() {
        $this->load->view('colaboradores_view');
    }

}