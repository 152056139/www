<?php
namespace app\home\controller;

use think\Controller ;

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

}
