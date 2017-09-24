<?php
    namespace app\admin\controller\home;

    use think\Controller;
    use app\admin\model\home\Message as MessageModel;

    class Message extends Controller
    {
        public function messagelist()
        {
            //实例化一个MessageModel对象
            $MessageModel = new MessageModel();
            $messages = $MessageModel->select();
            //给前台变量赋值
            $this->assign('messages', $messages);
            //取回打包的数据并且返回给页面
            return $this->fetch();
        }
    }
