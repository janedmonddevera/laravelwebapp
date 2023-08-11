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
        // $data = Student::all();
       
            $hh = array("data" => DB::table('students')->orderBy('created_at','desc')->simplePaginate(10));
      
       
        return view('students.index',  $hh)->with(['title', 'Homepage']);
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
    
       return redirect('/posdata')->with('message', 'New item added successfully');
       }

       
       public function show($id){
        $data = Student::findorFail($id);
       return view('students.edit', ['student' => $data]);
       }

       public function update(Request $request, Student $student){

        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "age" => ['required'],
            "email" => ['required', 'email'],
        ]);

            $student->update($validated);

            return back()->with('message', 'Value updated Successfully');
       }

       public function destroy(Request $req, Student $student){
        $student->delete();
        return redirect('/posdata')->with('message', 'Item Deleted Successfully');
       }
}
