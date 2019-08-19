@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <img src="/storage/{{ $post->image }}" alt="post" class="w-100">
        </div>
        <div class="col-lg-4 col-md-12">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="image" class="rounded-circle w-100" style="max-width:40px">
                    </div>
                    <div>
                        <div class="font-weight-bold"> 
                            <a href="/profile/{{ $post->user->id}}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                    @can('update', $post)
                    <div class="d-flex">
                        <a href="/p/{{ $post->id }}/edit" class="pl-5"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                        {{-- <a href="/p/{{ $post->id }}" class="pl-2"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a> --}}
                    </div>
                    <div class="pl-5">
                        {{-- The utility file helps to attach form for deletion --}}
                        @include('utils.delete',array( 'url' => URL::route('post.destroy',$post->id),'text' => '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Delete'))
                    </div>
                    @endcan
                </div>

                <hr>
                <p>
                    <span class="font-weight-bold"> 
                    <a href="/profile/{{ $post->user->id}}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption }}
            </p>

{{-- Displays an alert after a post has been updated --}}

            @if(session('message'))
            <div class="alert alert-success fade show" role="alert" style="text-align:center">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
            </div>
            
            @endif

            </div>
        </div>
    </div>
</div>
@endsection
