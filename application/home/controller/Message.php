<?php
	namespace app\home\controller;

	use think\Db;

	class Message
	{
		public function new_message()
		{
			$result = Db::execute('insert into home_message (title, name, phone, email, message) values ($_GET(), "2", "3", "4", "5")');
			dump($result);
		}

	}
