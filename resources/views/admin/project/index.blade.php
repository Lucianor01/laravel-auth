@extends('layouts.app')

@section('title')
    Project
@endsection

@section('content')
    <h1 class="text-center mt-3 text-uppercase">My Project</h1>

    <div class="container">
        <div class="row">
            @forelse ($project as $item)
                <div class="col-3">
                    <a class="text-decoration-none" href="{{ route('admin.project.show', $item) }}">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title text-uppercase">{{ $item->title }}</h4>
                                <p class="card-text"><strong>Description:</strong> {{ $item->description }}</p>
                                <p class="card-text"><strong>Price:</strong> {{ $item->price }}&euro;</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <h2>There are no Projects!!</h2>
            @endforelse
        </div>
        <div>
            <a class="btn btn-success d-table m-auto mt-5" href="{{ route('admin.project.create') }}">Create Project</a>
        </div>
    </div>
@endsection
