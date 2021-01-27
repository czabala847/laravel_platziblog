@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Artículo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Título *</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}" required/>
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" class="form-control-file" name="image" id="image" />
                        </div>
                        <div class="form-group">
                            <label>Contenido *</label>
                            <textarea class="form-control" name="body" id="body" rows="5" required>{{ old('body', $post->body) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido embebido</label>
                            <textarea class="form-control" name="iframe" id="iframe">{{ old('iframe', $post->iframe) }}</textarea>
                        </div>
                        <div class="form group">
                            @csrf
                            @method('PUT')
                            <input type="submit" class="btn btn-sm btn-primary" value="Guardar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
