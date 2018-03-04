<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tours extends CI_Controller {
    
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
        $data['content'] = "tour/tour";
        $this->load->view($layout, $data);
    }


    /*
     * This function use for sub page of placse page
     * example: www.ghura-fira.com/places/nilgiri
     * */
    public function singlePage(){
        $layout = 'templates/base_template';
        $data['content'] = "tour/page";
        $this->load->view($layout, $data);
    }
}
