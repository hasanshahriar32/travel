<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator as ValidationValidator;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        // $validator=validator($request->all(),[
        //     'email'=>'required|email',
        //     'password'=>'required|min:6'
        // ]);
        // if($validator->passes()){
        //     $credentials = $request->only('email', 'password');
        //     if (Auth::guard('admin')->attempt($credentials)) {
        //         return redirect()->intended('admin.dashboard');
        //     }
        //     return redirect()->back()->with('error', 'Invalid Credentials');
        // }

        
        $validator = FacadesValidator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if ($validator->passes()) {

            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                $admin = Auth::guard('admin')->user();
                if ($admin->role == 2) {
                    return redirect()->intended('admin.dashboard');
                } else {
                    Auth::guard('admin')->logout();
                    return redirect()->back()->with('error', 'password is wrong');
                }
            }

        }

        return redirect()->back()->with('error', 'Invalid Credentials');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


}
