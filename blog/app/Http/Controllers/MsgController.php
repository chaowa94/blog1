<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Http\Requests;

use App\Models\Msg;
use App\Models\Comment;

class MsgController extends Controller
{
    //首页
    public function index(){
        $msgs=Msg::all();
        return view('index')->with('msgs',$msgs);
    }
    //查
    public function view($id){
        // $comments=Msg::whereHas('reply', function($q){
        //     $q->where('msgs_id',$id);})
        // ->get();
        //$comment=Comment::all();
        $msg=Msg::all();
        return view('view')->withMsg(Msg::find($id))
        ->with('comment',$msg->find($id)->comment()->get());
    }
    //回复
    public function reply($id){
        $comment=new Comment();
        $comment->reply=Request::input('reply');
        $comment->msg_id=Request::input('msg_id');
        $comment->save();
        return redirect()->back();
    }
    //增
    public function add(){
        $msg=new Msg();
        $msg->title=Request::input('title');
        $msg->body=Request::input('body');
        $msg->save();
        return redirect('/');
    }
    //删
    public function delete($id){
        Msg::destroy($id);
        return redirect('/');
    }
    //改
    public function edit($id){
        return view('edit')->withMsg(Msg::find($id));
    }
    public function postEdit($id){
        $msg=Msg::find($id);
        $msg->title=Request::input('title');
        $msg->body=Request::input('body');
        $msg->save();
        return redirect('/');
    }

    // public function request(Request $request){
        
    //     //请求取值
    //     echo $request->input('name');
    //     echo $request->input('name','张三');
    //     //请求是否有name存在
    //     if($request->has('name')){
    //         echo $request->input('name');
    //     }else{
    //         echo "无参数";
    //     }
    //     //请求取所有值
    //     $arr=$request->all();
    //     dd($arr);

    //     //判断请求类型
    //     echo $request->method();
    //     if($request->isMethod('GET')){
    //         echo "yes";
    //     }else{
    //         echo "no";
    //     }
    //     $res=$request->ajax();
    //     var_dump($res);
    //     //路由路径
    //     $request->is('Msg/*');
    //     //当前url
    //     $request->url();
    // }

    // public function session1(Request $request){
    //     //http request session();
    //     $request->session->put('key1','value1');
    //     echo $request->session()->get('key1');
    //     //辅助函数
    //     session()->put('key2','value2');
    //     echo session()->get('key2');
    //     //Session类
    //     Session::put('key3','value3');
    //     echo Session::get('key3');
    //     echo Session::get('key3','默认值');
    //     //Session存取数组
    //     Session::push('key4','value4');
    //     Session::push('key4','value5');
    //     $arr=Session::get('key4');
    //     var_dump($arr);
    //     //取出数据并删除
    //     Session::pull();
    //     //取出所有Session值
    //     $arr=Session::all();
    //     dd($arr);
    //     //是否存在
    //     Session::has('key1');
    //     //删除某个session
    //     Session::forget('key1');
    //     Session::flush();//删除所有session
    //     //暂存（一次性）
    //     Session::flash('key5','value5');
    // }
    // public function session2(Request $request){
        
    // }

    // public function response(){
    //     //json响应
    //     $data=[
    //         'erro'=>0,
    //         'erroMsg'=>'success',
    //     ];
    //    return response()->json($data);
    //    //重定向
    //    return redirect('/');
    //    return redirect('/')->with('key','value');
    //    return redirect()->action('MsgController@response');
    //    return redirect()->back();//返回上一级路由页面
    // }
    // public function activity0(){
    //     return "敬请期待";
    // }
    // public function activity1(){
    //     return "进行中1";
    // }
    // public function activity2(){
    //     return "进行中2";
    // }
}