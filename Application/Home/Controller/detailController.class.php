<?php
namespace Home\Controller;
use Think\Controller;

class detailController extends Controller
{
    public function index($id) {
        echo $_REQUEST($id);
        $this->display();
    }
}