@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <div class="card-text">
                        {{ $post->body }}
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection
