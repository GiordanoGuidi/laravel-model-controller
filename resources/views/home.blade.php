@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1 class="text-center my-5">Movies List</h1>
    <div class="row g-5">
        @foreach ($movies as $movie )            
        <div class="col-3">
           @include('includes.movies_card')
        </div>
        @endforeach
    </div>
</div>
@endsection