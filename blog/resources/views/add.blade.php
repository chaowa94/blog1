@extends('msg')

@section('content')
    <div>
        <form action="add" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <p>
                标题：<input type="text" name="title"/>
            </p>
            <p>
                内容：<textarea name="body" id="" cols="30" rows="10"></textarea>
            </p>
            <p>
                <input type="submit" value="提交"/>
            </p>
        </form>
    </div>

@endsection