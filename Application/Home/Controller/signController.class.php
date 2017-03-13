<?php

namespace Home\Controller;
use Think\Controller;
class signController extends Controller{

    public function index() {
        if( IS_AJAX ) {
            $data = $_POST;
            if( !$data['email'] ) {
                echo json_encode(array('status' => 0, 'info' => '用户名不能为空', 'url' => __SELF__));
                return;
            }
            if( !$data['password'] ) {
                echo json_encode(array('status' => 0, 'info' => '密码不能为空', 'url' => __SELF__));
                return;
            }
            $this->users = M('users');
            $where = 'email=' ."'". trim(strtolower($data['email']))."'";
            $user = $this->users->where($where)->find();

            if(!$user || $user['password'] != $data['password']) {
                echo json_encode(array('status' => 0, 'info' => '用户名或密码不能为空', 'url' => __SELF__));
                return;
            }

            $login = array('login_time' => time());
            if($this->users->where('id='.$user['id'])->save($login)) {
                session('id', $user['id']);
                session('email', $user['email']);
                session('username', $user['name']);
                $this->success('登录成功', __ROOT__);
            }
        } else if( IS_GET ){
            $this->display();
        }


    }

    public function signup() {
        if (IS_AJAX) {
            $data = $_POST;
//            dump($data);
            if( !$data['email'] ) {
                echo json_encode(array('status' => 0, 'info' => '邮箱不能为空', 'url' => __SELF__));
                return;
            }
            if( !$data['password'] ) {
                echo json_encode(array('status' => 0, 'info' => '密码不能为空', 'url' => __SELF__));
                return;
            }
            if( !$data['repassword'] ) {
                echo json_encode(array('status' => 0, 'info' => '请再次输入密码', 'url' => __SELF__));
                return;
            }
            if ( $data['password'] != $data['repassword'] ) {
                echo json_encode(array('status' => 0, 'info' => '两次输入密码不一致', 'url' => __SELF__));
                return;
            }
            if( !$data['username'] ) {
                echo json_encode(array('status' => 0, 'info' => '用户名不能为空', 'url' => __SELF__));
                return;
            }
            if (!check_verify($data['verify'])) {
                echo json_encode(array('status' => 0, 'info' => '验证码错误', 'url' => __SELF__));
                return;
            }
            unset($data['repassword']);
            unset($data['verify']);
            unset($data['_token']);
            $data['name'] = $data['username'];

            $this->users = M('users');
            $returnId = $this->users->add($data);
            if($returnId) {
                session('id',$returnId);
                session('username',$data['username']);
                session('email',$data['email']);
                $this->success('注册成功',__ROOT__);
            } else {
                echo json_encode(array('status' => 0, 'info' => '验证码错误', 'url' => __SELF__));
            }

        } else if (IS_GET) {
            $this->display();
        }

    }

    public function logout() {
        session('id', null);
        session('username', null);
        session('email', null);
        $this->success('退出成功',__ROOT__);
    }

    public function Verify() {
        $Verify = new \Think\Verify();
        $Verify->entry();
    }

}