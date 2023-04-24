@extends('backend.layouts.homepage')
@section('title', 'Sayfa Güncelle')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2" style="color: black">
            @yield('title')
            <a href="{{route('page.index')}}" class="btn btn-sm btn-primary float-lg-right ">
                <i class="fas fa-fw fa-book-open"></i>
                Mevcut Sayfalar
            </a>
        </h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('page.update', $page->id)}}" method="post" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Sayfa Başlığı</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$page->title}}">
                        <span class="text-danger">@error('title'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug Değeri</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{$page->slug}}">
                        <span class="text-danger">@error('slug'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="editor">Sayfa İçeriği</label>
                        <textarea name="content" id="editor" class="form-control" cols="30" rows="10">{{$page->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height' : 300,
                }
            );
        });
    </script>
@endsection

