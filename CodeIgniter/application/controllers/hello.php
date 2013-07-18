<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hello extends CI_Controller{
  public function __construct(){
    parent::__construct();

    }
    public function index(){
        echo 'Hi,Man!';
    }
  public function sayHello($name,$age)
  {
    echo 'My name is '.$name.',my age is '.$age.' years old!';
  }
  public function show_view()
  {
	$n1='Lucy';
	$a1=28;
	@$count=file_get_contents('./num002.txt');
	$count=$count?$count:0;
	$count++;
	$res=fopen('./num002.txt','w');
	fwrite($res,$count);
	fclose($res);
	$data=array('name'=>$n1,'age'=>$a1,'count'=>$count);
    $this->load->view('view_header',$data);
	$this->load->view('view_footer');
  }
    public function insertProduct(){
      // echo 'start';
        $this->load->model('product');
        //echo 'ss';
        $arr=array('productName'=>'ipad3','productPrice'=>4567,'num'=>222);
        $this->product->user_insert($arr);
        echo "You succeed to insert!!";
    }
    public function updateProduct(){
        $this->load->model('product');
        //echo 'ss';
        $arr=array('productName'=>'ipad8','productPrice'=>9567,'num'=>333);
        $this->product->user_update('ipad2',$arr);
        echo "You succeed to update!!";
    }
    public function queryProduct(){
        $this->output->cache(1);
        $this->load->model('product');
        //echo 'ss';
        //$arr=array('productName'=>'ipad8','productPrice'=>9567,'num'=>333);
        $res=$this->product->user_query('ipad8');
        //var_dump($res);
        $arr['price']=$res[0]->productPrice;

        $this->load->view('testMysql',$arr);

    }
    public function register(){
        $this->load->view('register');
    }
    public function showRes(){
        $this->load->view('showRes');
    }

}