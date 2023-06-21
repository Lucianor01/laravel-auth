@extends('layouts.app')

@section('title')
    Project | Show
@endsection

@section('content')
    <div class="container text-center mt-3 text-uppercase">
        <h1>Single Project</h1>

        <div class="col-3 m-auto">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title text-uppercase">{{ $project->title }}</h4>
                    <p class="card-text"><strong>Description:</strong> {{ $project->description }}</p>
                    <p class="card-text"><strong>Price:</strong> {{ $project->price }}&euro;</p>
                </div>
            </div>
        </div>
    </div>
@endsection
