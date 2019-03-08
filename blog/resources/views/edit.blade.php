@extends('msg')

@section('content')
    <div>
        <form action="../edit/{{$msg->id}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <p>
                标题：<input type="text" name="title" value="{{$msg->title}}"/>
            </p>
            <p>
                内容：<textarea name="body" id="" cols="30" rows="10">{{$msg->body}}</textarea>
            </p>
            <p>
                <input type="submit" value="修改"/>
            </p>
        </form>
    </div>

@endsection