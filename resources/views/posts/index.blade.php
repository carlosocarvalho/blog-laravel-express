@extends('tpl')

@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        @foreach( $posts as $post)
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    {{ $post->title }}
                </h2>
                <h3 class="post-subtitle">
                    {{ $post->body }}
                </h3>
            </a>
            <p class="post-meta">Postado por <a href="#">Administrador</a> há {{ $post->created_at->diffForHumans() }}</p>
        </div>
            <hr>
        @endforeach
    </div>
</div>
@stop