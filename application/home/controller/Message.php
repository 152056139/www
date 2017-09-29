<?php
	namespace app\home\controller;

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
	        $Message->home_message_title = $postData['title'];
	        $Message->home_message_name = $postData['name'];
	        $Message->home_message_phone = $postData['phone'];
	        $Message->home_message_email = $postData['email'];
	        $Message->home_message_content = $postData['content'];
			$Message->home_message_type = 0;
	        $Message->save();
	        $this->success("留言成功");
	    }

	}
