@extends('frontend.layouts.master')
@section('title', $article->title)
@section('content')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">{{$article->title}}</h2>
                        <p>{!! $article->content !!}</p>
                    </a>
                </div>
            </div>
            @include('frontend.layouts.sidebar')
        </div>
    </div>
@endsection
