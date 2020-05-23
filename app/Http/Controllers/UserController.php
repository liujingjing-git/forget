<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;

class UserController extends Controller
{
    public function qianren()
    {
        return view('user/QianRen');
    }
    public function  wangji()
    {
        return view('user/WangJi');
    }
    public function fenxiang()
    {
        return view('user/FeiXiang');
    }
    public function fenxiangdo()
    {
        $post = request()->except('_token');
        if(empty($post['user_name']))
        {
            echo "<script>alert('名称不可为空');location.href='FenXiang'</script>";
        }
        if(empty($post['user_age']))
        {
            echo "<script>alert('年龄不可为空');location.href='FenXiang'</script>";
        }
        if(empty($post['user_wenan']))
        {
            echo "<script>alert('文案不可为空');location.href='FenXiang'</script>";
        } 
        if(empty($post['user_desc']))
        {
            echo "<script>alert('感情故事不可为空');location.href='FenXiang'</script>";
        }
       
        // $preg_name='/^[\x{4e00}-\x{9fa5}]{2,10}$|^[a-zA-Z\s]*[a-zA-Z\s]{2,20}$/isu';
        // if(preg_match($preg_name,$post['user_name'])){
        //     echo "<script>alert('yes 即将跳转');location.href='GanQing'</script>";
        // }else{
        //     echo "<script>alert('no 名字格式不正确 只包含中英文的名字');location.href='FenXiang'</script>";
        // }

        $res = UserModel::insertGetId($post);
        
        if($res){
            echo "<script>alert('分享成功 正在跳转...');location.href='GanQing'</script>";
        }else{
            echo "<script>alert('分享失败 请重试');location.href='FenXiang'</script>";
        }
   
    }

    public function ganqing()
    {
        $data = UserModel::paginate(4);
        return view('user/GanQing',['data'=>$data]);
    }
}
