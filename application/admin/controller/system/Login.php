<?php
    namespace app\admin\controller\system;

    use think\Controller;
    use think\Request;
    use think\Cookie;
    use think\Db;

    class Login extends Controller
    {
        function login()
        {
            return $this->fetch('login');
        }
        /*
        *检查用户输入的信息，并且存入日志
        *
        */
        function check_who()
        {
            $postData = Request::instance() -> post();
            if($postData['username'] == "admin" && $postData['password'] == "123456")
            {
                echo "登录成功";
            }
            else
            {
                echo "登录失败";
            }
        }
        function logout()
        {
            $this->success("退出成功",'system.Login/login');
        }

	}
