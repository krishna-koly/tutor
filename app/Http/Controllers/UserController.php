<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data['users'] = User::all();
       
        return view('backend.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.user.create');
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

      
         $file = $request->file('image');
        if ($file) {
            $ext = strtolower($file->getClientOriginalExtension());

            if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
                $ext = "";
            }
        } else {
            $ext = "";
        }



         // dd($request->all());
        $arr = new User();
        $arr->name = $request->input("name");
  
        $arr->email = $request->input("email");
     
        $arr->image = $ext;
        
        $arr->role = $request->input("role");
      
       // $arr->type=$request->input("type");
        // $arr->action = $request->input("action");
        $arr->save();
         $insertId = $arr->id;

         if ($ext) {
            $file->move("back/images/user", "user-$insertId.$ext");
        }

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

        $user = User::find($id);
       
        

        return view('backend.user.edit',compact('user'));
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

        $user = User::find($id);
       
     

       


           
        if ($file) {
            $ext = strtolower($file->getClientOriginalExtension());

            if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
                $ext = $user->image;
            }
        } else {
            $ext = $user->image;
        }




        $user->name = $request->name;
         
        $user->email = $request->email;
       
        
        $user->image = $ext;
        $user->role = $request->role;
        
        //$category->type=$request->type;
        
        //$tutor->action = $request->action;
    
 

        $id = $user->id;
        

        //fist a cheeck korlam je $tutor save hbe tokhn jodi file exsit kore oi folder a
        //tahole unlink korbe and notun pic link kore dibe.
      
   if ($user->save()) {

            if(file_exists("back/images/user/user-$id")){
                
                 unlink("back/images/user/user-$id");
            }
           
           if ($file) {
               # code...
             $file->move("back/images/user", "user-$id.$ext");
           }
           
        }

        return redirect()->route('admin.user.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $user = User::find($id);
        //dd($id);
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
