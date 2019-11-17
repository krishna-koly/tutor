<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TutorRegister;
use App\District;

class TutorRegisterController extends Controller
{
    //

    public function create()
    {
        //
        $data['tutors'] = TutorRegister::all();
        $data['districts']=District::all();
        return view('frontend.Tutorregister.register', $data);
    }


    public function store(Request $request)
    {
        
        // $str = $request->input("about");
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
                'name' => 'required|min:7',
                'phone' => 'required|min:11',
                 'email' => 'required',
                 'password' => 'required|string|min:6|confirmed',
                 'contact_address'=> 'required',
                 'about'=> 'required',
                
               
            ]
        ); 



        // dd($request->all());
         $arr = new TutorRegister();
        $arr->name = $request->input("name");
        $arr->image = $ext;
        $arr->phone = $request->input("phone");
        $arr->email = $request->input("email");
        $arr->password = bcrypt('password');
        $arr->about = $request->input("about");
        $arr->contact_address = $request->input("contact_address");
        
        $arr->district_id = $request->input("district_id");
        $arr->gender = $request->input("gender");

        // $arr->university_id = $request->input("university_id");
        // $arr->degree_id = $request->input("degree_id");
        // $arr->subject_id = $request->input("subject_id");
       // $arr->type=$request->input("type");
        // $arr->action = $request->input("action");
        $arr->save();
        $insertId = $arr->id;

         if ($ext) {
            $file->move("back/images/front/tutor", "tutor-$insertId.$ext");
        }


       // Storage::put("files/$insertId.txt", $str);

        //return redirect()->route('admin.tutor.index')->with('success','Successfully Inserted Tutor!');
    }

    public function tutorlogin()
    {
        //

        return view('frontend.Tutorregister.login');
    }



     public function index()
    {
        //

        $data['tutors'] = TutorRegister::all();
        $data['tutors'] = TutorRegister::paginate(10);
        $data['districts']=District::all();
       
        return view('backend.AllTutor.index',$data);
    }


    public function info($id){

        $this->data['tutors']=TutorRegister::find($id);
        //$this->data['tutors']=TutorRegister::all();
        return view('frontend.tutorprofile.info', $this->data);
    }


}
