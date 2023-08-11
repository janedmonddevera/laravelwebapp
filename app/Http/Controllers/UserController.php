<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller

{
    public function index (Request $request){
        $hehe = Student::all();

        return view('index', ['data'=> $hehe]);
    }
   public function login (){
    
   if(View::exists('users.login')){
    return view('users.login');
   }else{
    return abort(404);
   }
    
   }
   public function process (Request $request){

    $validated = $request->validate([
        "email" => ['required','email'],
        "password" => 'required'
        ]);
    
        if (auth()->attempt($validated)) {
            
            $request->session()->regenerate();
           
            return redirect('/')->with('message', 'Welcome to mobile legends');
        }
        return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');
   }
   public function create(){
    if(View::exists('users.create')){
        return view('users.create');
       }else{
        return abort(404);
       }
   }
   public function store(Request $request){

    $validated = $request->validate([
            "name" => ['required', 'min:4   ', 'max:20'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:4'
    ]);

    $validated['password'] = bcrypt($validated['password']);
    $user = User::create($validated);

    auth()->login($user);
    // dd($request);
   }
   public function logout(Request $request){
    // dd($request);
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')->with('message', 'Logout succesful');
   }

   public function home(Request $request){

    return view('homepage.home');
   }
}
