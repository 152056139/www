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
	        $Message->message_title = $postData['title'];
	        $Message->message_name = $postData['name'];
	        $Message->message_phone = $postData['phone'];
	        $Message->message_email = $postData['email'];
	        $Message->message_content = $postData['content'];
			$Message->message_type = 0;
	        $Message->save();
	        $this->success("留言成功");
	    }

	}
