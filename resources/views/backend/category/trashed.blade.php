@extends('backend.layouts.homepage')
@section('title', 'Silinmiş Kategoriler')
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
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Kategori Başlığı</th>
                            <th>Silinme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($categories)>0)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->deleted_at}}</td>
                                    <td>
                                        <a href="{{route('category.recover', $category->id)}}" title="Geri Kurtar" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i></a>
                                        <a href="{{route('category.delete', $category->id)}}" title="Temelli Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach"
                        @else
                            <tr>
                                <td colspan="7">
                                    <p class="text-center">Silinmiş Kategori Bulunamadı</p>
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


