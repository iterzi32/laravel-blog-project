@extends('frontend.layouts.master')
@section('title', 'İletişim')
@section('content')
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-4">
                    <div class="my-5">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <form action="{{route('contact.store')}}" method="post" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Ad Soyad">
                                <span class="text-danger">@error('name'){{$message}}@enderror</span>
                            </div><br>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Adres">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5"></textarea>
                                <span class="text-danger">@error('message'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
