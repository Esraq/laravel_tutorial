<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'phone'=>'required',
            
        ]);




        $input = $request->all();
        Student::create($input);
       /// echo "done";
       return redirect('student_list');
       /* return redirect()->route('products.index')
                        ->with('success','Product created successfully.');

                        */
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student_edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Student $student)
    {
        $input = $request->all();
        $student->update($input);
      
       return redirect('student_list');

    

      /// echo "test";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
         
        return redirect('student_list');
                        
    }
}
