<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Tutor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['tutors'] = Tutor::all();
       
        return view('backend.tutor.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.tutor.create');
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
         $str = $request->input("about");




         $file = $request->file('image');
        if ($file) {
            $ext = strtolower($file->getClientOriginalExtension());

            if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
                $ext = "";
            }
        } else {
            $ext = "";
        }


        //validation

        $validate = $request->validate(
            [
                'name' => 'required|min:3',
                'phone' => 'required|min:11',
                 'email' => 'required',
                 'contact_address'=> 'required',
                
               
            ]
        );



        // dd($request->all());
        $arr = new Tutor();
        $arr->name = $request->input("name");
        $arr->phone = $request->input("phone");
        $arr->email = $request->input("email");
        $arr->contact_address = $request->input("contact_address");
        
        $arr->image = $ext;
        $arr->gender = $request->input("gender");
        $arr->university_id = $request->input("university_id");
        $arr->degree_id = $request->input("degree_id");
        $arr->subject_id = $request->input("subject_id");
       // $arr->type=$request->input("type");
        // $arr->action = $request->input("action");
        $arr->save();
        $insertId = $arr->id;

         if ($ext) {
            $file->move("back/images/tutor", "tutor-$insertId.$ext");
        }


        Storage::put("files/$insertId.txt", $str);

        return redirect()->route('admin.tutor.index');
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

          $tutor = Tutor::find($id);
        //dd($id);
        $tutor->delete();
        return redirect()->route('admin.tutor.index');
    }
}
