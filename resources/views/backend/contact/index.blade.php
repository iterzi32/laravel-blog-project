@extends('backend.layouts.homepage')
@section('title', 'Mesajlar')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2" style="color: black">
            @yield('title')
            <a href="{{route('message.trashed')}}" class="btn btn-sm btn-warning float-lg-right "
               style="color: black">
                <i class="fa fa-trash-alt"></i>
                Silinen Mesajlar
            </a>
        </h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Email Adresi</th>
                            <th>Mesaj İçeriği</th>
                            <th>EKlenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($messages)>0)
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->message}}</td>
                                    <td>{{$message->created_at}}</td>
                                    <td>
                                        <a href="{{route('message.destroy', $message->id)}}" class="btn btn-sm btn-danger" title="Sil"><i class="fa fa-times"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">
                                    <p class="text-center">Mesaj Bulunamadı</p>
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


