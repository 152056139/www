<?php
    namespace app\admin\controller\home;

    use think\Controller;

    class Message extends Controller
    {
        public function messagelist()
        {
            return $this->fetch();
        }
    }
