<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_c extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library('session');
    $this->load->library('encrypt');
    }
    public function index(){
        $this->load->view('admin_login_v');
    }
    public function chk_login(){
        //$this->load->helper(array('url','form'));
        $this->load->library('form_validation');
        $this->load->model('admin_m');
        $query1=$this->admin_m->user_validate(array($_POST['UserName'], $this->encrypt->sha1($_POST['Password'])));
        $result=$query1->result_array();
        //$result=$result[0]->UserName;
        //echo $result;
        //var_dump($result->result());
        $err_arr['login_error']=$result ? '':'用户名称不存在或用户密码错误';
        $this->form_validation->set_rules('UserName','用户名称','required');
        //$this->form_validation->set_rules('age','年龄','trim|required');
        $this->form_validation->set_rules('Password','用户密码','required');
        //$this->form_validation->set_rules('pwd_conf','确认密码','trim|required');
        //$this->form_validation->set_rules('email','电子邮件','trim|required|valid_email');
        if( $this->form_validation->run() && $result)
        {
          /*  $this->load->model('user');
            $arr=array('userName'=>$_POST['userName'],'age'=>$_POST['age'],'pwd'=>$_POST['pwd'],'email'=>$_POST['email']);
            $this->user->user_insert($arr);
            $this->load->view('showRes');*/
            //echo 'You succeed to login in';
            $query=$this->admin_m->admin_select($_POST['UserName']);
            $res=$query->result_array();
            $LastLoginIP=$this->session->userdata['ip_address'];
            $LastLoginTime=date('Y-m-d H:i:s');
            $LoginTimes=$res[0]['LoginTimes']+1;
            $Purview=$res[0]['Purview'];
            $saleqx=$res[0]['saleqx'];
            $arr=array('LastLoginIP'=>$LastLoginIP,'LastLoginTime'=>$LastLoginTime,'LoginTimes'=>$LoginTimes);
            $this->admin_m->admin_update($arr);
            $arrNew=array('UserName'=>$_POST['UserName'],'Purview'=>$Purview,'saleqx'=>$saleqx);
            $this->session->set_userdata($arrNew);

            $this->load->view('admin_index_left_v');
            $this->load->view('admin_index_top_v');
            $this->load->view('admin_index_main_v');
        }
        else
            $this->load->view('admin_login_v',$err_arr);
    }
    public function jiami($str){

        echo $this->encrypt->sha1($str);
    }
    public function jiemi($str){

        echo $this->encrypt->decode($str);
    }
    public function testSql(){
        $this->load->database();
        $sql="select Password from admin where UserName=?";
        $query=$this->db->query($sql,'032');
        $res=$query->result_array();
        foreach($res as $arr){
            echo $arr['Password'];
        }

    }

}