@extends('backend.layouts.homepage')
@section('title', 'Kategori Güncelle')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2" style="color: black">
            @yield('title')
            <a href="{{route('category.index')}}" class="btn btn-sm btn-primary float-lg-right ">
                <i class="fas fa-fw fa-list-ul"></i>
                Mevcut Kategoriler
            </a>
        </h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('category.update', $category->id)}}" method="post" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Kategori Başlığı</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$category->title}}">
                        <span class="text-danger">@error('title'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug Değeri</label>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{$category->slug}}">
                        <span class="text-danger">@error('slug'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


