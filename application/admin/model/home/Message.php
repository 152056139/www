<?php
    namespace app\admin\model\home;

    use think\Model;
    use think\Db;
    use think\Cookie;
    use think\Controller as MessageController;

    class Message extends Model
    {

        //对是否审核进行转化
        protected function getHomeMessageAuditAttr($value)
        {
            $home_message_audit = [0=>'未审核', 1=>'已审核'];
            //返回到message控制器
            return $home_message_audit[$value];
        }

        //对消息类型进行转化
        protected function getHomeMessageTypeAttr($value)
        {
            $home_message_type = [0=>'官网留言',1=>'原料报价', 2=>'新闻动态'];
            return $home_message_type[$value];
        }

        //查找留言
        public static function find_message()
        {

            $messages = Db::table('home_message')
                ->alias('a')
                ->join('home_message_type b', 'b.home_message_type_no = a.home_message_type')
                ->join('home_message_audit c', 'c.home_message_audit_no = a.home_message_audit')
                ->where('home_message_audit', Cookie::get('method_audit'), Cookie::get('audit'))
                ->where('home_message_type', Cookie::get('method_type'), Cookie::get('type'))
                ->paginate(10);
            //返回
            return $messages;
        }

    }
