@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @foreach ($posts as $post)
                        <div class="card-header">
                            <a href="{{ route('posts.show', $post) }}"> {{ $post->title }}</a>
                        </div>
                    @endforeach
                    <div class="card-footer">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">New post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
