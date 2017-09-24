<?php
    namespace app\admin\controller\home;

    use think\Controller;
    use app\admin\model\home\Message as MessageModel;

    class Message extends Controller
    {
        //列出留言列表
        public function message_list()
        {
            //实例化一个MessageModel对象
            $MessageModel = new MessageModel();
            $messages = $MessageModel->select();
            //给前台变量赋值
            $this->assign('messages', $messages);
            //取回打包的数据并且返回给页面
            return $this->fetch();
        }
        //删除留言
        public function delete_message($home_message_no)
        {
            $MessageModel = MessageModel::get($home_message_no);
            if($MessageModel)
            {
                $MessageModel->delete();
                $this->success("删除成功");
            }
            else
            {
                $this->error("删除失败，请核实后重试");
            }
        }
    }
