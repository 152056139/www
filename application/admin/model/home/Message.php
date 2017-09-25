<?php
    namespace app\admin\model\home;

    use think\Model;

    class Message extends Model
    {
        public function getHomeMessageAuditAttr($value)
        {
            $home_message_audit = [0=>'未审核', 1=>'已审核'];
            return $home_message_audit[$value];
        }
    }
