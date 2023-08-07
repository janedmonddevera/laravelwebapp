<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){
       
        $data = Student::all();

        // $data = DB::table('students')
        //         ->select(DB::raw('count(*) as name_count, first_name
        //         '))->groupBy('first_name')->get();
       
        return view('students.index', ['data' => $data])->with(['title', 'Homepage']);
    }

    public function create(){



        return view('students.store')->with('title', 'Create new');
    }
    public function store(Request $request){

        $validated = $request->validate([
                "first_name" => ['required', 'min:4'],
                "last_name" => ['required', 'min:4'],
                "age" => ['required'],
                "email" => ['required', 'email', 'email',Rule::unique('students', 'email')]
        ]);
    
        
       Student::create($validated);
    
       return redirect('/')->with('message', 'New item added successfully');
       }
}
