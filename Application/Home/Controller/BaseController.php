<?php
/**
 * Created by PhpStorm.
 * User: fengshuo.tian
 * Date: 2018/9/14
 * Time: 16:34
 */

namespace Home\Controller;

use Think\Controller;
class BaseController extends Controller
{
    /**
     *  基础类初始化操作
     */
    public function _initialize(){
        //TODO 鉴权操作
    }
}