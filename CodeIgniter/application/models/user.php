<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 61159
 * Date: 13-7-16
 * Time: 下午5:34
 * To change this template use File | Settings | File Templates.
 */

class User extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function user_insert($arr){
        $this->db->insert('user',$arr);
    }

}