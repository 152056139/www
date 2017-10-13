<?php
    namespace app\admin\controller\home;

    use think\Controller;
    use think\Request;
    use think\Cookie;
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
            //标记方法类型
            Cookie::set('page_type', 'list');
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
            //标记方法类型
            Cookie::set('page_type', 'find');
            //获取表单传过来的查询条件
            $param = Request::instance()->param();
            //如果点的是查询
            if(!isset($param['page'])){
                //对查询条件进行处理

                //处理综合查询
                if($param['integrated'] == null){
                }
                //处理时间

                //处理是否审核
                if($param['audit'] == 'all'){
                    Cookie::set('audit', -1);
                    Cookie::set('method_audit', '>');
                }else{
                    Cookie::set('audit', $param['audit']);
                    Cookie::set('method_audit', '=');
                }

                //处理类型
                if($param['type'] == 'all'){
                    Cookie::set('type', -1);
                    Cookie::set('method_type', '>');
                }else{
                    Cookie::set('type', $param['type']);
                    Cookie::set('method_type', '=');
                }
                //处理时间

            }
            //获取留言
            $messages = MessageModel::find_message();
            //获取到的数量
            $count = count($messages);
            //判断是否查询结果为空
            if(count($messages) != 0) {
                //分页
                $page = $messages->render();
                //其他的数据全部原样返回给页面
                $this->assign('list', $messages);
                $this->assign('count',$count);
                $this->assign('page',$page);
                //取回打包的数据并且返回给页面
                return $this->fetch('message_list');
            }
            else {
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
        **查看留言详情
        **
        **/
        public function message_detail()
        {
            return $this->fetch('message_detail');
        }
    }
