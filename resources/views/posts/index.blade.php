@extends('layouts.app')
@section('content')
    <!--Write Post -->
    <form action="{{ route('post') }}" method="POST">
        @csrf
            <div class="container">
                <div class="row  justify-content-center ">
                    <div class="col-sm-8 bg-white border border-1 p-5 rounded">
                        <div class="mb-3">
                            <textarea name="body" class="form-control @error('body') border border-danger @enderror" rows="7" placeholder="Post Somthing !!"></textarea>
                        </div>

                        <div class="text-danger mb-2">
                            @error('body')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success px-4 py-2 mt-2">Post</button>
                    </div>
                </div>
            </div>
    </form>

                <!---POSTS--->
                <div class="container mt-3">
                    <div class="row  justify-content-center ">
                        <div class="col-sm-8  border border-1 p-5 rounded bg-white">
                            <div class="mb-3">

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
                </div>


@endsection
