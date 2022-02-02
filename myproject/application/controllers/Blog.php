<?php
class Blog extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Latihan CI';
        $data['content'] = 'Hello world';
        $this->load->view('blog_view',$data);
    }
}