<?php
namespace Home\Controller;
use Think\Controller;
class userController extends Controller{

    public function index() {
        $this->display();
    }
    public function fans() {
        $this->display();
    }
    public function followers() {
        $this->display();
    }

    public function avatar() {
        $id = session('id');
        $this->users = M('users');
        $this->data = $this->users->where('id='.$id)->find();


        $this->display();
    }
    public function setting() {
        $this->display();
    }
    public function password() {
        $this->display();
    }

}