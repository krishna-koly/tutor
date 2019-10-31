<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Others;
class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $others = Others::all();
        return view('backend.Others.index',compact('others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

      return view('backend.Others.create');
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


        $arr = new Others();
        $arr->name=$request->input("name");
        $arr->diff_type = $request->input("difftype");
        
        $arr->save();

       // Alert::message('Sucessfull inserted new District');
        return redirect()->route('admin.other.index');
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

         $others = Others::find($id);
       
       
        

        return view('backend.Others.edit',compact('others'));
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

        $others = Others::find($id);
        $others->name = $request->name;
        $others->diff_type=$request->difftype;
        $others->save();
        return redirect()->route('admin.other.index');
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

        $other = Others::find($id);
        //dd($id);
        $other->delete();
        return redirect()->route('admin.other.index');
    }
}
