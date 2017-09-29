<?php
    namespace app\admin\controller\home;

    use think\Controller;
    use think\Request;
    use think\Db;
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
            if($messages != null)
            {
                foreach ($messages as $key => $message)
                {
                    $list = $message->paginate(2);
                    $page = $list->render();
                }
                //其他的数据全部原样返回给页面
                $this->assign('list', $list);
                $this->assign('page', $page);
                //取回打包的数据并且返回给页面
                return $this->fetch('message_list');
            }
            else
            {
                return $this->fetch('errors');
            }
        }
        /*
        **查找相应的留言
        **
        **/
        public function find_message()
        {
            //提取全部的数据
            $messages = Db::table('home_message')->where('home_message_type',1)->where('home_message_audit',0)->paginate(2);
            $page = $messages->render();
            //其他的数据全部原样返回给页面
            $this->assign('list', $messages);
            $this->assign('page',$page);
            //取回打包的数据并且返回给页面
            return $this->fetch('find_message');
        }
        /*
        **删除留言
        **
        **/
        public function delete_message($home_message_no)
        {
            //按照no获取相应的留言
            $messages = MessageModel::get($home_message_no);
            if($messages)
            {
                $messages->delete();
                $this->success("删除成功");
            }
            else
            {
                $this->error("删除失败，请核实后重试");
            }
        }

        /*
        **查看留言
        **
        **/
        public function detail_message()
        {

        }
    }
