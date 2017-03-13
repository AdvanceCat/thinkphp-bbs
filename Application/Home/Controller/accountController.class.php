<?php

namespace Home\Controller;
use Think\Controller;

class accountController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!session('id')) {
            $this->error('没有权限', __ROOT__);
        }
    }

    public function index()
    {
        $id = $_SESSION['id'];
        $this->users = M('users');
        if (IS_GET) {
            $this->data = $this->users->where('id='.$id)->find();
            $this->display();
        } elseif (IS_POST) {
            $data = $_POST;
            if ($data) {
                if ($this->users->where('id='.$id)->save($data)) {
                    $this->success('保存成功');
                } else {
                    $this->error('保存失败');
                }
            }
        }
    }

    public function avatar()
    {
        $id = $_SESSION['id'];
        $this->users = M('users');
        $this->avatar = $this->users->where('id='.$id)->getField('avatar');
        var_dump($this->avatar);
        $this->display();
    }
    public function password()
    {
        if (IS_POST) {
            $id = $_SESSION['id'];
            $data = $_POST;
            $this->users = M('users');

            if ($data['password'] === $this->users->where('id='.$id)->getField('password')) {
                if ($this->users->where('id='.$id)->save(array('password' => $data['reNewPassword']))) {
                    echo json_encode(array('info' => '密码更改成功', 'success' => 1));
                }
            } else {
                echo json_encode(array('info' => '旧密码不正确'));
            }
        } else {
            $this->display();
        }
    }

    public function upload()
    {
        $id = $_SESSION['id'];
        if (IS_POST) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Public/upload/'; // 设置附件上传根目录
            $upload->savePath  =     'avatar/'; // 设置附件上传（子）目录
            $upload->subName  =      null; // 干掉时间路径
            // 上传文件
            $info   =   $upload->upload();
            if (!$info) {// 上传错误提示错误信息
                echo json_encode(array('status' => 0, 'msg' => '上传失败'));
            } else {// 上传成功
                $this->users = M('users');
                $this->users->where('id='.$id)->save(array('avatar' => $info['files']['savename']));
                $infoUrl = $info['files']['savepath'].$info['files']['savename'];
                echo json_encode(array(
                  'status' => 1,
                  'msg' => '上传成功',
                  'avatar' => __ROOT__.'/Public/upload/'.$infoUrl
                ));
            }
        }
    }
}
