<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 61159
 * Date: 13-7-17
 * Time: 下午5:05
 * To change this template use File | Settings | File Templates.
 */


class Admin_m extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function user_validate($arr){
         $sql="select UserName from admin where UserName=? and Password=?";
        return  $this->db->query($sql,$arr);

    }
    public function admin_update($arr){
        $sql="update admin set LastLoginIP=?,LastLoginTime=?,LoginTimes=? where UserName=?";
      $this->db->query($sql,$arr);

    }
    public function admin_select($str){
        $sql="select * from admin where UserName=?";
       return  $this->db->query($sql,$str);
    }
}