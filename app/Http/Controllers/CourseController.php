<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses']=Course::all();
        return view('admin.manage_course',$data); 
    }

    public function create()
    {
       return view("admin.insert_course"); 
    }

    public function store(Request $request)
    {
        // dd($request->image); die;
        $course=$request->validate([
            'title'=>'required',
            'category'=>'required',
            'price'=>'required',
            'duration'=>'required',
            'image'=>'required',
            'description'=>'required',
        ]);
        if($request->hasFile("image")){
            $file=$request->file("image");
            $imageName=rand().'_'.time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("image/"),$imageName);


        $course = new Course();

        $course->title=$request->title;
        $course->category=$request->category;
        $course->price=$request->price;
        $course->discount_price=$request->discount_price;
        $course->duration=$request->duration;
        $course->description=$request->description;
        $course->image= $imageName;
        $course->save();
        }

      
        // Course::create($course);
        return redirect()->route('course.index');
    }

    public function show(Course $course)
    {
        
    }

    public function edit(Course $course)
    {
        return view("admin.edit",['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        if($request->hasFile("image")){
            $file=$request->file("image");
            $imageName=rand().'_'.time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("image/"),$imageName);



        $course->title=$request->title;
        $course->category=$request->category;
        $course->price=$request->price;
        $course->discount_price=$request->discount_price;
        $course->duration=$request->duration;
        $course->description=$request->description;
        $course->image= $imageName;
        $course->save();
        }

        // Course::create($course);
        return redirect()->route('')->back();
    }

    public function destroy(Course $course)
    {

        $course ->destroy();
        return redirect()->back();
    }
}
