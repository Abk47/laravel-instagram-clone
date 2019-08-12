@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="image" class="rounded-circle w-100" />
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3">
                <div class="h4">{{ $user->username }}</div>
                <button class="btn btn-primary ml-4">Follow</button>
            </div>

            @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
            @endcan

        </div>
        @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
        @endcan
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
