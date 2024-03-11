@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1 class="text-center my-5">Movies List</h1>
    <div class="row g-5">
        @foreach ($movies as $movie )            
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>
                </div>
            </div>    
        </div>
        @endforeach
    </div>
</div>
@endsection