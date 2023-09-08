@extends('layouts.main')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="jumbotron">
    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3 text-center">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <h5 class="p-4">{{ $comic['title'] }}</h5>
                </div>
            @endforeach
        </div>
    </div>
@endsection