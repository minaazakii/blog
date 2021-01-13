@extends('layouts.app')
@section('content')

        <div class="container">
            <div class="row  justify-content-center w-auto">

            <div class="col-sm-8  border border-0 p-5 rounded ">
                <h1 class="text-decoration-underline text-capitalize">{{ $user->name }}</h1>

                <p class="fs-4">posted -> {{ $user->posts()->count() }} {{ Str::plural('post', $posts->count()) }}</p>
                <span class="fs-5">{{ $user->receivedLikes()->count() }} {{ Str::plural('like', $user->receivedLikes()->count()) }}</span>

            </div>
                <div class="col-sm-8 bg-white border border-1 p-5 rounded">
                @if($posts->count())

                  @foreach ($posts as $post)
                    <x-post :post="$post" />
                  @endforeach

                @else
                  there is no posts
                @endif

                </div>
            </div>
    </div>


@endsection

