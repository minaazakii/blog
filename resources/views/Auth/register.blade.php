@extends('layouts.app')
@section('content')

        <div class="container ">
            <div class="row justify-content-center">
              <div class="col-sm-6 bg-light border border-1 p-5 rounded">
                <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <legend class="mb-3">Register</legend>
                </div>
                    <div class="mb-3">
                        <input  name="name" value="{{ old('name') }}" type="text" class="form-control border border-2 py-3 
                        @error('name') border border-danger @enderror" placeholder="Enter Your Name">
                    </div>

                    @error('name')
                        <div class="text-danger mb-3">
                            {{ $message }}
                        </div>
                    @enderror

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
                        <input  name="email" value="{{ old('email') }}" type="email" class="form-control border border-2 py-3 
                        @error('email') border border-danger @enderror" placeholder="Your Email">
                    </div>

                    @error('email')
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

                    <div class="mb-3">
                        <input  name="password_confirmation" value="" type="password" class="form-control  border border-2 py-3
                        @error('password_confirmation') border border-danger @enderror" placeholder="Confirm Password">
                    </div>

                    @error('password_confirmation')
                        <div class="text-danger mb-3">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="d-grid gap-2 pt-3">
                     <button type="submit"class="btn btn-primary"> Submit</button>
                    </div>
                </form>
              </div>
            </div>
    </div>


@endsection