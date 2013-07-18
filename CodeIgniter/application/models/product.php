<?php
/**
 * Created by JetBrains PhpStorm.
 * User: 61159
 * Date: 13-7-16
 * Time: 上午10:29
 * To change this template use File | Settings | File Templates.
 */

class Product extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function user_insert($arr){
        $this->db->insert('product',$arr);
    }
    public function user_update($name,$arr){
        $this->db->where('productName',$name);
        $this->db->update('product',$arr);
    }
    public function user_query($name){
        $this->db->where('productName',$name);
        $this->db->select('*');
        $query=$this->db->get('product');
        return $query->result();
    }
}
?>