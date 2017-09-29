<?php
    namespace app\admin\model\home;

    use think\Model;
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


        //是否审核查询
        protected function scopeAudit($query)
        {
            $query->where('home_message_audit', 0);
        }

        //类型查询
        protected function scopeType($query)
        {
            $query->where('home_message_type', 0);
        }
        //时间查询
        protected function scopeTime($query)
        {
            $query->where('home_message_time', '1');
        }
        //标题
        protected function scopeTitle($query)
        {
            $query->where('home_message_title', '1');
        }
        //发件人
        protected function scopeName($query)
        {
            $query->where('home_message_name', '1');
        }
        //手机号
        protected function scopePhone($query)
        {
            $query->where('home_message_phone', '1');
        }
        //邮箱
        protected function scopeEmail($query)
        {
            $query->where('home_message_email', '1');
        }
        //内容
        protected function scopeContent($query)
        {
            $query->where('home_message_content', '1');
        }
        //审核人
        protected function scopeAuditer($query)
        {
            $query->where('home_message_auditer', '1');
        }
    }
