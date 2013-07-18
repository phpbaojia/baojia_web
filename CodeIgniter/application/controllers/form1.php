<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: 61159
 * Date: 13-7-16
 * Time: 下午4:44
 * To change this template use File | Settings | File Templates.
 */

class Form1 extends CI_Controller {
    public function index(){
        //parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('userName','用户名','trim|required');
        $this->form_validation->set_rules('age','年龄','trim|required');
        $this->form_validation->set_rules('pwd','密码','trim|required|matches[pwd_conf]|md5|min_length[8]');
        $this->form_validation->set_rules('pwd_conf','确认密码','trim|required');
        $this->form_validation->set_rules('email','电子邮件','trim|required|valid_email');

        if( $this->form_validation->run())
        {
            $this->load->model('user');
            $arr=array('userName'=>$_POST['userName'],'age'=>$_POST['age'],'pwd'=>$_POST['pwd'],'email'=>$_POST['email']);
            $this->user->user_insert($arr);
            $this->load->view('showRes');
        }
        else
            $this->load->view('register');
    }
}