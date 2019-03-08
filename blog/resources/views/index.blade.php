<!-- 继承msg文件 -->
@extends('msg')

@section('content')
<p>
    <a href="add">添加</a>
</p>

<div>
    <table border="1" cellspacing="0" cellpadding="20">
        <tr>
            <th>id</th>
            <th>标题</th>
            <th>时间</th>
            <th>操作</th>
        </tr>
        @foreach($msgs as $msg)
        <tr>
            <td>{{$msg->id}}</td>
            <td>{{$msg->title}}</td>
            <td>{{$msg->updated_at }}</td>
            <td>
                |<a href="view/{{$msg->id}}">查看</a>|
                <a href="delete/{{$msg->id}}">删除</a>|
                <a href="edit/{{$msg->id}}">编辑</a>|
            </td>
        </tr>

        @endforeach

    </table>
</div>

@endsection