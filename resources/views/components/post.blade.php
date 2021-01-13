@props(['post'=>$post])

<div class="my-2">
    <a class="fw-bold text-dark text-decoration-underline" href="{{ route('profile',$post->user) }}">{{ $post->user->name }}</a> <span class="text-secondary fs-6">{{ $post->created_at->diffForHumans() }}</span>
</div>
<p>{{ $post->body }}</p>
@auth
    @if(!$post->likedby(auth()->user()))
        <!-- Like Button -->
        <form class="row justify-content-center form-check form-check-inline" action="{{ route('like',$post) }}" method="POST">
            @csrf
            <button class="btn btn-primary px-3 py-1" type="submit">like</button>
        </form>
    @else
        <!-- Unlike Button -->
        <form class="row justify-content-center form-check form-check-inline" action="{{ route('unLike',$post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-warning px-3 py-1" type="submit">Unlike</button>
        </form>
    @endif

    <!-- Delete Button -->
    @can('delete',$post)
    <form class="row justify-content-center form-check form-check-inline" action="{{ route('delete',$post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger px-3 py-1" type="submit">Delete</button>
    </form>
    @endcan
    <form class="row justify-content-center form-check form-check-inline" action="{{ route('showPost',$post) }}" method="get">
        <button class="btn btn-dark px-3 py-1" type="submit">Show</button>
    </form>
@endauth
    <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }} </span>
