<?php
    namespace app\admin\controller\system;

    use think\Controller;
    use think\Request;
    use think\Cookie;
    use think\Session;
    use think\Db;

    use app\admin\model\system\Admin as AdminModel;

    class Login extends Controller
    {
        function login()
        {
            return $this->fetch('login');
        }
        public function main()
        {
            if(!Session::has('hasLogin'))    $this->redirect('system.Login/login');    else {
                return $this->fetch('main');
            }
        }
        public function index()
        {
            if(!Session::has('hasLogin'))    $this->redirect('system.Login/login');    else {
                return $this->fetch('index');
            }
        }
        public function left()
        {
            if(!Session::has('hasLogin'))    $this->redirect('system.Login/login');    else {
                return $this->fetch('left');
            }
        }
        public function top()
        {
            if(!Session::has('hasLogin'))    $this->redirect('system.Login/login');    else {
                return $this->fetch('top');
            }
        }
        /*
        *检查用户输入的信息，并且存入日志
        *
        */
        function check_who()
        {
            //获取表单得到的用户名和密码
            $postData = Request::instance() -> post();
            //查找是否存在此用户
            $user = AdminModel::get(['admin_name' => $postData['username']]);

            //判断此用户的密码是否正确
            if($postData['password'] == $user['admin_password'])
            {
                //设置session变量
                Session::set('hasLogin','true');
                Session::set('adminName', $postData['username']);
                //加入日志

                //加载首页
                $this->redirect('system.Login/main');
            }
            else
            {
                $this->error("登录失败", 'system.Login/login');
            }
        }

        /*
        *退出系统
        *
        */
        function logout()
        {
            //删除session变量
            Session::delete('hasLogin');
            $this->success("退出成功",'system.Login/login');
        }

	}
