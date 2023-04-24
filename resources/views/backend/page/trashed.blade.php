@extends('backend.layouts.homepage')
@section('title', 'Silinmiş Sayfalar')
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
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sayfa Başlığı</th>
                            <th>Silinme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($pages)>0)
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->deleted_at}}</td>
                                    <td>
                                        <a href="{{route('page.recover', $page->id)}}" title="Geri Kurtar" class="btn btn-sm btn-primary"><i class="fa fa-recycle"></i></a>
                                        <a href="{{route('page.delete', $page->id)}}" title="Temelli Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">
                                    <p class="text-center">Silinmiş Sayfa Bulunamadı</p>
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


