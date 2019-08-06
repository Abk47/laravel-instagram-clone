@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-jnb1-1.cdninstagram.com/vp/57232a80cf54b65b1dc0528773aab6cf/5DCA6B5B/t51.2885-19/s150x150/20686411_115717535752399_3513130596400365568_a.jpg?_nc_ht=scontent-jnb1-1.cdninstagram.com" alt="logo" class="rounded-circle" />
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="/p/create">Add New Post</a>
        </div>
        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
            <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>25k</strong> followers</div>
                <div class="pr-4"><strong>401</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div><p>{{ $user->profile->description }}</p></div>
        <div><a href="http://{{$user->profile->url}}">{{ $user->profile->url }}<a></div>
        </div>
    </div>
    
    <div class="row pt-4">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="image" class="w-100"/>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
