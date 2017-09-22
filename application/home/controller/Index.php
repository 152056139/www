<?php
namespace app\home\controller;

use think\Controller ;
use think\Db;

class Index extends Controller
{
	// load view
  public function index()
  {
		return $this->fetch('index/index');
  }
    public function about()
  {
		return $this->fetch('index/about');
  }
    public function contact()
  {
		return $this->fetch('contact');
  }
    public function join()
  {
		return $this->fetch('join');
  }
    public function message()
  {
		return $this->fetch('message');
  }
    public function new_info()
  {
		return $this->fetch('new_info');
  }
    public function new_list()
  {
		return $this->fetch('new_list');
  }
    public function product_list()
  {
		return $this->fetch('product_list');
  }
    public function product_info()
  {
		return $this->fetch('product_info');
  }

  public function new_message()
  {
      $result = Db::execute('insert into home_message (title, name, phone, email, message) values ("1", "2", "3", "4", "5")');
      dump($result);
  }

}
