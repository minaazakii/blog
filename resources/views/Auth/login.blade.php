@extends('layouts.app')
@section('content')

<div class="container ">
    <div class="row justify-content-center">
      <div class="col-sm-6 bg-light border border-1 p-5 rounded">
        <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
        <legend class="mb-3">Login</legend>

        @if(session()->has('loginError'))
            <div class="text-danger mb-3">
                {{ session('loginError') }}
            </div>
        @endif

            <div class="mb-3">
                <input  name="username" value="{{ old('username') }}" type="text" class="form-control border border-2 py-3
                @error('username') border border-danger @enderror" placeholder="Username">
            </div>

            @error('username')
                <div class="text-danger mb-3">
                    {{ $message }}
                </div>
            @enderror

            <div class="mb-3">
                <input  name="password" value="" type="password" class="form-control border border-2 py-3
                @error('password') border border-danger @enderror" placeholder="Enter Your Password">
            </div>

            @error('password')
                <div class="text-danger mb-3">
                    {{ $message }}
                </div>
            @enderror

            <div class="form-check">
                <input name="remember" class="form-check-input" type="checkbox" >
                <label class="form-check-label">
                  Remember Me
                </label>
            </div>

            <div class="d-grid gap-2 pt-3">
             <button type="submit"class="btn btn-primary py-3"> Login</button>
            </div>
        </form>
      </div>
    </div>
</div>


@endsection
