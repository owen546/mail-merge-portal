<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('auth_lib');
    }

    public function logout() {
        $this->auth_lib->logout();
    }
}
