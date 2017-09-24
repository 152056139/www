<?php
    namespace app\admin\controller\home;

    use think\Controller;
    use app\admin\model\home\Message as MessageModel;

    class Message extends Controller
    {
        /*
        **列出留言列表
        **
        **/
        public function message_list()
        {
            //提取全部的数据
            $messages = MessageModel::all();
            //给是否审核那一列把数据库里的0变成未审核，1变成已审核
            foreach($messages as $mess){
                if ($mess->home_message_audit == 0){
                    $this->assign('home_message_audit', '未审核');
                } else {
                    $this->assign('home_message_audit', '已审核');
                }
            }
            //其他的数据全部原样返回给页面
            $this->assign('messages', $messages);
            //取回打包的数据并且返回给页面
            return $this->fetch();
        }
        /*
        **删除留言
        **
        **/
        public function delete_message($home_message_no)
        {
            //按照no获取相应的留言
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
        /*
        **查找相应的留言
        **
        **/
        public function find_message()
        {

        }
        /*
        **查看留言
        **
        **/
        public function detail_message()
        {

        }
    }
