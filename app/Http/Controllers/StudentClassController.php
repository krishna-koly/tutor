<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClass;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $studentclasses = StudentClass::all();
        $studentclasses = StudentClass::paginate(10);

        return view('backend.Studentclass.index', compact('studentclasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.Studentclass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validate = $request->validate(
            [
                'name' => 'required|min:1',
                
                
            ]
        );



        $arr = new StudentClass();
        $arr->name = $request->input("name");
        
        $arr->save();

       // Alert::message('Sucessfull inserted new District');
        return redirect()->route('admin.studentclass.index')->with('success','Successfully Inserted New Class!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $studentclass = StudentClass::find($id);
        return view('backend.Studentclass.edit', compact('studentclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $studentclass = StudentClass::find($id);
        $studentclass->name = $request->name;
        $studentclass->save();
        return redirect()->route('admin.studentclass.index')->with('info','Successfully Updated Selected Guardian!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $studentclass = StudentClass::find($id);
        //dd($id);
        $studentclass->delete();
        return redirect()->route('admin.studentclass.index')->with('warning','Successfully Deleted Selected Item!');
    }
}
