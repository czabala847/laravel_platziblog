@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        @if ($post->image)
                            <img src="{{ $post->get_image }}" alt="Imagen del post {{ $post->title }}" class="card-img-top" />
                        @else
                            {!! $post->iframe !!}
                        @endif
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <div class="card-text">
                            {{ $post->get_excerpt }}
                            <a href="{{ route('post', $post) }}">Leer más</a>
                        </div>
                        <p class="text-muted mb-0">
                            <em>
                                &ndash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>  
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
