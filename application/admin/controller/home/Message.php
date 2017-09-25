<?php
    namespace app\admin\controller\home;

    use think\Controller;
    use think\Request;
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
                foreach($messages as $key =>$message)
                {
                    $list = $message->paginate(10);
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
            //获取表单传来的检索信息
            $postData = Request::instance()->post();
            //判断是否被审核
            if($postData['audit'] == 'all')
            {
                $messages = MessageModel::all();
            }
            else
            {
                $messages = MessageModel::all(['home_message_audit'=>$postData['audit']]);
            }

            //判断检索的结果是否为空
            if($messages != null)
            {
                foreach($messages as $key =>$message)
                {
                    $list = $message->paginate(10);
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
