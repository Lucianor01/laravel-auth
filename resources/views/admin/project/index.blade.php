@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-3 text-uppercase">My Project</h1>

    <div class="container">
        <div class="row">
            @forelse ($project as $item)
                <div class="col-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->title }}</h4>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="card-text">{{ $item->price }}&euro;</p>
                        </div>
                    </div>
                </div>
            @empty
                <h2>There are no Projects!!</h2>
            @endforelse
        </div>
    </div>
@endsection
