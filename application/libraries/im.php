<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class im
{
    public function openview($viewname, $data, $header, $footer)
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
}