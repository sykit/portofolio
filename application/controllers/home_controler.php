<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home_controler extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('home_model'); // Load model ke controller ini
    }

    public function index() {
        $this->load->view('home_display');
    }

}
