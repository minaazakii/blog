@extends('layouts.app')
@section('content')

        <div class="container">
            <div class="row  justify-content-center ">
                <div class="col-sm-8 bg-white border border-1 p-5 rounded">
                  <x-post :post="$post" />
                </div>
            </div>
    </div>


@endsection
