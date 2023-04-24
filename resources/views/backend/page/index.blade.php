@extends('backend.layouts.homepage')
@section('title', 'Sayfalar')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2" style="color: black">
            @yield('title')
            <a href="{{route('page.trashed')}}" class="btn btn-sm btn-warning float-lg-right "
               style="color: black">
                <i class="fa fa-trash-alt"></i>
                Silinen Sayfalar
            </a>
        </h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Makale Başlığı</th>
                            <th>Eklenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($pages)>0)
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->created_at}}</td>
                                    <td>
                                        <a target="_blank"
                                           href="{{route('page.show', $page->slug)}}" class="btn btn-sm btn-success" title="Görüntüle"><i class="fa fa-eye"></i></a>
                                        <a href="{{route('page.edit', $page->id)}}" class="btn btn-sm btn-primary" title="Güncelle"><i
                                                class="fa fa-pen"></i></a>
                                        <form action="{{route('page.destroy', $page->id)}}" method="post"
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
                                    <p class="text-center">Sayfa Bulunamadı</p>
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


