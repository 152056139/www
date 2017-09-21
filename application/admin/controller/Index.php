<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function main()
    {
        	return $this->fetch('main');
    }
    public function left()
    {
        	return $this->fetch('left');
    }
    public function top()
    {
        	return $this->fetch('top');
    }
    public function right()
    {
        	return $this->fetch('right');
    }
    public function imgtable()
    {
        	return $this->fetch('imgtable');
    }
    public function computer()
    {
        	return $this->fetch('computer');
    }
    public function defaults()
    {
        	return $this->fetch('defaults');
    }
    public function errors()
    {
        	return $this->fetch('errors');
    }
    public function filelist()
    {
        	return $this->fetch('filelist');
    }
    public function form()
    {
        	return $this->fetch('form');
    }
    public function imglist()
    {
        	return $this->fetch('imglist');
    }
    public function imglist1()
    {
        	return $this->fetch('imglist1');
    }
    public function index()
    {
        	return $this->fetch('index');
    }
    public function login()
    {
        	return $this->fetch('login');
    }
    public function tab()
    {
        	return $this->fetch('tab');
    }
    public function tools()
    {
        	return $this->fetch('tools');
    }
}
