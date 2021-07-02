@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://img1.luminarypodcasts.com/v1/podcast/4476bc58-b31c-40b5-a63b-270ef0b20cd5/default/h_500,w_500/image/s--5r54k72s--/aHR0cHM6Ly9zc2wtc3RhdGljLmxpYnN5bi5jb20vcC9hc3NldHMvMi9mL2YvNy8yZmY3Y2M4YWEzM2ZlNDM4L2ZyZWVjb2RlY2FtcC1zcXVhcmUtbG9nby1sYXJnZS0xNDAwLmpwZw==.jpg" style="height: 200px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
