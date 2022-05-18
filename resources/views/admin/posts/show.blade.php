@extends('layouts.templates.admin')

@section('title', $post->title)

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection