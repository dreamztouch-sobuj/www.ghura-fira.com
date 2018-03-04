<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Places extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->page = $this->common_library->commonSession();
    }
        

    /*
     * This function use for places page
     * */

    public function index()
    {
        $layout = 'templates/base_template';
        $data['content'] = "place/place";
        $this->load->view($layout, $data);
    }


    public function singlePage(){
        $layout = 'templates/base_template';
        $data['content'] = "place/page";
        $this->load->view($layout, $data);
    }
}
