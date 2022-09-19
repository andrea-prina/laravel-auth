@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <div class="row">
            <div class="col-12"><h2 class="fw-bolder">{{ $post['title'] }}</h2></div>
        </div>
        <div class="row">
            <div class="col-6"><h4>{{ $post['author'] }}</h4></div>
            <div class="col-6"><h4>{{ $post['post_date'] }}</h4></div>
            
        </div>
        <div class="row">
            <div class="col-12">
                <img src="{{ $post['post_image'] }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12">{{ $post['post_content'] }}</div>
        </div>
    </div>

@endsection