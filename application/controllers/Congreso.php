<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Congreso extends CI_Controller{

    public function __constuct(){
        parent:: __constuct();
    }


    public function index(){
        $data = array("content"=>'congreso/congreso',"dataView"=>'');
        $this->load->view('layout',$data);
    }



}

?>