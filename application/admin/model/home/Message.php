<?php
    namespace app\admin\model\home;

    use think\Model;

    class Message extends Model
    {

        //对是否审核进行转化
        public function getHomeMessageAuditAttr($value)
        {
            $home_message_audit = [0=>'未审核', 1=>'已审核'];
            //返回到message控制器
            return $home_message_audit[$value];
        }

        //对消息类型jinxing转化
        public function getHomeMessageTypeAttr($value)
        {
            $home_message_type = [0=>'官网留言',1=>'原料报价', 2=>'新闻动态'];
            return $home_message_type[$value];
        }
    }
