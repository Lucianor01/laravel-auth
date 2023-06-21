@extends('layouts.app')

@section('title')
    Project | Create
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mt-3 text-uppercase">New Project</h1>
        {{-- ! FORM --}}
        <form action="{{ route('admin.project.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="project-title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="project-title" aria-describedby="helpId"
                    placeholder="enter project title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project-description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="project-description" rows="3"
                    placeholder="enter project description"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project-price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" step="0.01" id="project-price"
                    aria-describedby="helpId" placeholder="enter the price">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success">New Post</button>
        </form>
    </div>
@endsection
