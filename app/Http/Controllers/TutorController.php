<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Tutor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


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
        $data['tutors'] = Tutor::paginate(10);
       
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

        return redirect()->route('admin.tutor.index')->with('success','Successfully Inserted Tutor!');
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

         $tutor = Tutor::find($id);
       
        

        return view('backend.tutor.edit',compact('tutor'));
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



        $file = $request->file('image');

        $tutor = Tutor::find($id);
       
     

       


           
        if ($file) {
            $ext = strtolower($file->getClientOriginalExtension());

            if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
                $ext = $tutor->image;
            }
        } else {
            $ext = $tutor->image;
        }




        $tutor->name = $request->name;
         $tutor->phone = $request->phone;
        $tutor->email = $request->email;
        $tutor->contact_address = $request->contact_address;
        
        $tutor->image = $ext;
        $tutor->gender = $request->gender;
        $tutor->university_id = $request->university_id;
        $tutor->degree_id = $request->degree_id;
        $tutor->subject_id = $request->subject_id;
        //$category->type=$request->type;
        
        //$tutor->action = $request->action;
    
 

        $id = $tutor->id;
        

        //fist a cheeck korlam je $tutor save hbe tokhn jodi file exsit kore oi folder a
        //tahole unlink korbe and notun pic link kore dibe.
      
   if ($tutor->save()) {

            if(file_exists("back/images/tutor/tutor-$id")){
                
                 unlink("back/images/tutor/tutor-$id");
            }
           
           if ($file) {
               # code...
             $file->move("back/images/tutor", "tutor-$id.$ext");
           }
           
        }

        return redirect()->route('admin.tutor.index')->with('info','Successfully Updated Tutor!');;
        
        
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
        return redirect()->route('admin.tutor.index')->with('warning','Successfully Deleted selected tutor!');
    }
}
