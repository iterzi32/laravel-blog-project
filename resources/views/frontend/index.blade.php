@extends('frontend.layouts.master')
@section('content')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach($articles as $article)
                    <div class="post-preview">
                        <a href="{{route('article.show', [$article->category->slug, $article->slug])}}">
                            <h2 class="post-title">{{$article->title}}</h2>
                            <h3 class="post-subtitle">{!! $article->content !!}</h3>
                        </a>
                        <p class="post-meta">
                            <a href="{{route('article.show', [$article->category->slug, $article->slug])}}">Kategori
                                : {{$article->category->title}}</a>
                            <span class=float-lg-end>Yayın Tarihi : {{$article->created_at}}</span>
                        </p>
                    </div>
                @endforeach
                <hr class="my-4"/>
            </div>
            @include('frontend.layouts.sidebar')
        </div>
    </div>
@endsection
