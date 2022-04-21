@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                   <form action="{{ route('posts.create') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <input type="text" name="title" placeholder="Enter post title">
                        </div>
                        <div class="card-body">
                            <textarea name="body" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
