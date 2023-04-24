@extends('backend.layouts.homepage')
@section('title', 'Kategoriler')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2" style="color: black">
            @yield('title')
            <a href="{{route('category.trashed')}}" class="btn btn-sm btn-warning float-lg-right "
               style="color: black">
                <i class="fa fa-trash-alt"></i>
                Silinen Kategoriler
            </a>
        </h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kategori Başlığı</th>
                            <th>Eklenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($categories)>0)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>
                                        <a target="_blank" href="{{route('category.show', $category->slug)}}" class="btn btn-sm btn-success" title="Görüntüle"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-sm btn-primary" title="Güncelle"><i class="fa fa-pen"></i></a>
                                        <form action="{{route('category.destroy', $category->id)}}" method="post"
                                              style="display: inline-block">@csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger" title="Sil" type="submit"><i
                                                    class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">
                                    <p class="text-center">Kategori Bulunamadı</p>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


