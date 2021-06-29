@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://img1.luminarypodcasts.com/v1/podcast/4476bc58-b31c-40b5-a63b-270ef0b20cd5/default/h_500,w_500/image/s--5r54k72s--/aHR0cHM6Ly9zc2wtc3RhdGljLmxpYnN5bi5jb20vcC9hc3NldHMvMi9mL2YvNy8yZmY3Y2M4YWEzM2ZlNDM4L2ZyZWVjb2RlY2FtcC1zcXVhcmUtbG9nby1sYXJnZS0xNDAwLmpwZw==.jpg" style="height: 200px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline
">
            <div><h1>{{$user->username}}</h1></div>
            <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://s3.amazonaws.com/www-inside-design/uploads/2020/10/aspect-ratios-blogpost-1x1-1.png" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://blog.uniclixapp.com/wp-content/uploads/2020/05/1-1-instagram-1024x1024-1.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://steamuserimages-a.akamaihd.net/ugc/924802058717094712/ACC7BE614DDB7472BB466F8E53FF75368C3C6E7F/?imw=512&imh=512&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
