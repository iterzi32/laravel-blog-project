@extends('backend.layouts.homepage')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Yönetim Sayfasına Hoşgeldiniz</h1>
            <a target="_blank" href="{{route('frontend.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-laptop text-white-50"></i> Siteyi Görüntüle</a>
        </div>
    </div>
@endsection

