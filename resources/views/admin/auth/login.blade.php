<!DOCTYPE html>
<html lang="en">
@include('backend.layouts.head')
<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                @if(Session::has('fail'))
                                    <div class="alert alert danger">{{Session::get('fail')}}</div>
                                @endif
                                <form action="{{route('admin.authenticate')}}" class="user" method="post" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               name="email" id="email" placeholder="Enter Email Address..." value="{{old('email')}}">
                                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                              name="password" id="password" placeholder="Password" value="{{old('password')}}">
                                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
