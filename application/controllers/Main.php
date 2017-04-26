<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function openview($viewname, $data = null, $header = null, $footer = null)
    {
        if (isset($header))
            $this->load->view($header);
        else
            $this->load->view('templates/header');

        $this->load->view($viewname, $data);

        if (isset($footer))
            $this->load->view($footer);
        else
            $this->load->view('templates/footer');
    }

    public function index()
    {
        $this->openview('_test');
        // $this->load->view('welcome_message');
    }
}
