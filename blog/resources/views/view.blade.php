@extends('msg')

@section('content')
    <h3>{{$msg->title}}</h3>
    <h4>
        时间：{{$msg->updated_at}}
    </h4>
    <p>
        内容：<br/>
        &nbsp;&nbsp;{{$msg->body}}
    </p>

    <!-- --------------------------- -->
    <p>
        回复内容：<hr/>
        <table border="1" cellspacing="0" cellpadding="20">
        <tr>
            <th>回复内容</th>
            <th>回复时间</th>
        </tr>
        @foreach($comment as $comment)
        <tr>
            <td>{{$comment->reply}}</td>
            <td>{{$comment->updated_at}}</td>
        </tr>
        @endforeach
        </table>
    </p>
    <!-- ----------------------------- -->
        <form action="../reply/{{$msg->id}}" method="post">
        &nbsp;&nbsp;<p>新增回复:</p>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="msg_id" value="{{$msg->id}}"/>
            <textarea name="reply" id="reply" cols="30" rows="10"></textarea>
            <br/>&nbsp;&nbsp;
            <input type="submit" value="回复"/>
        </form>


@endsection