<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacto extends CI_Controller {

    public function index() {
        $this->load->model("inicio_model");
        $data["logo"]["logo"] = $this->inicio_model->getlogo();
        $data["footer"]["legalfooter"] = $this->inicio_model->legalfooter();
        $data["footer"]["lemonfooter"] = $this->inicio_model->lemonfooter();
        $this->load->view('contacto_view', $data);
    }

    function emailsender() {
        // load form validation class
        // set form validation rules
        $this->form_validation->set_rules('sender_name', 'From', 'required');
        $this->form_validation->set_rules('sender_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('contact_view');
        } else {
            // you can also load email library here
            // $this->load->library('email');
            // set email data
            $this->email->from($this->input->post('sender_email'), $this->input->post('sender_name'));
            $this->email->to('furiston@furiston.com');
            $this->email->reply_to($this->input->post('sender_email'), $this->input->post('sender_name'));
            $this->email->subject($this->input->post('subject'));
            $this->email->message($this->input->post('message'));
            $this->email->send();

            // create a view named "succes_view" and load it at the end
            $this->load->view('success_view');
        }
    }

}