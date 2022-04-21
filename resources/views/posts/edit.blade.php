@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                   <form action="{{ route('posts.edit', $post) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <input type="text" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="card-body">
                            <textarea name="body" id="" cols="30" rows="10">{{ $post->body }}</textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
