<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panneau_de_controle extends CI_Controller {
    public function index() {
        if (!$this->auth_user->is_connected) {
            redirect('index');
        }
        $data["title"] = "Panneau de contrôle";

        $this->load->view('common/header', $data);
        $this->load->view('partage/index', $data);
        $this->load->view('common/footer', $data);
    }
}