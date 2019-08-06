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
            <a href="#">Add New Post</a>
        </div>
            <div class="d-flex">
                <div class="pr-4"><strong>13</strong> posts</div>
                <div class="pr-4"><strong>25k</strong> followers</div>
                <div class="pr-4"><strong>401</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div><p>{{ $user->profile->description }}</p></div>
        <div><a href="https://{{$user->profile->url}}">{{ $user->profile->url }}<a></div>
        </div>
    </div>
    
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://scontent-jnb1-1.cdninstagram.com/vp/3efd4ba00813e8fdba66dba1eb503171/5DE3D824/t51.2885-15/sh0.08/e35/s640x640/29716639_235186443719084_23222596111695872_n.jpg?_nc_ht=scontent-jnb1-1.cdninstagram.com" alt="image" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://scontent-jnb1-1.cdninstagram.com/vp/c0f06974a3510cadb02886454f47acb7/5DE5750E/t51.2885-15/e35/s1080x1080/66375216_1108621049526542_8532519941867650379_n.jpg?_nc_ht=scontent-jnb1-1.cdninstagram.com" alt="image" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://scontent-jnb1-1.cdninstagram.com/vp/b647140b6302291f4814fd221e0223cf/5DD60CB8/t51.2885-15/sh0.08/e35/s640x640/23668040_498360097217668_816295540043022336_n.jpg?_nc_ht=scontent-jnb1-1.cdninstagram.com" alt="image" class="w-100"/>
        </div>
    </div>
</div>
@endsection
