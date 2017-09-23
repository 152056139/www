<?php
	namespace app\home\controller;

	use think\Db;
	use think\Controller;
	use think\Request;
	use app\home\model\Message as MessageModel;

	class Message extends Controller
	{
		//渲染在线留言页面
		public function message()
		{
			return $this->fetch();
		}
		//添加留言
	    public function add_message()
	    {
	        $postData = Request::instance() -> post();
	        $Message = new MessageModel();
	        $Message->title = $postData['title'];
	        $Message->name = $postData['name'];
	        $Message->phone = $postData['phone'];
	        $Message->email = $postData['email'];
	        $Message->message = $postData['message'];
	        $Message->save();
	        $this->success("留言成功");
	    }

	}
