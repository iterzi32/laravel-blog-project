@extends('backend.layouts.homepage')
@section('title', 'Silinmiş Makaleler')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2" style="color: black">
            @yield('title')
            <a href="{{route('article.index')}}" class="btn btn-sm btn-primary float-lg-right ">
                <i class="fa fa-book"></i>
                Mevcut Makaleler
            </a>
        </h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Makale Başlığı</th>
                            <th>Makale Katetegorisi</th>
                            <th>Silinme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($articles)>0)
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->category->title}}</td>
                                    <td>{{$article->deleted_at}}</td>
                                    <td>
                                        <a href="{{route('article.recover', $article->id)}}" title="Geri Kurtar" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i></a>
                                        <a href="{{route('article.delete', $article->id)}}" title="Temelli Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">
                                    <p class="text-center">Silinmiş Makale Bulunamadı</p>
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


