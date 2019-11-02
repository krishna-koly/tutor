<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guardian;
use Illuminate\Support\Facades\File;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data['guardians'] = Guardian::all();
       
        return view('backend.Guardian.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.Guardian.create');
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

          //code for image
      
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
        $arr = new Guardian();
        $arr->name = $request->input("name");
        $arr->phone = $request->input("phone");
        $arr->email = $request->input("email");
        $arr->contact_address = $request->input("contact_address");
        
        $arr->image = $ext;
        $arr->gender = $request->input("gender");
       // $arr->type=$request->input("type");
        // $arr->action = $request->input("action");
        $arr->save();
        $insertId = $arr->id;

         if ($ext) {
            $file->move("back/images/guardian", "guardian-$insertId.$ext");
        }

        return redirect()->route('admin.guardian.index');
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

          $guardian = Guardian::find($id);
        //dd($id);
        $guardian->delete();
        return redirect()->route('admin.guardian.index');
    }
}
