<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use http\Env\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);
        $status = Auth::guard('admin')->attempt($credentials);

        if ($status) {
            return redirect()->route('admin.index');
        } else {
            return  redirect()->back()->with('fail', 'Email ya da şifre bilgisi hatalı');
        }
    }
}
