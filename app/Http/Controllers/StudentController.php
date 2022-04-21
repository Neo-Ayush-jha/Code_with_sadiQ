<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $data['students'] = Student::where("status","1")->get();
        $data['title']="Active";
        return view("admin/manageStudents",$data);
    }

    public function newAdmission(){
        $data['students']=Student::where("status","0")->get();
        $data['title']="New Admission";
        return view("admin/manageStudents",$data);
    }
    public function passOut(){
        $data['students']=Student::where("status","2")->get();
        $data['title']="Pass Out";
        return view("admin/manageStudents",$data);
    }
}



























// public function store(Request $req){
//     $req->validate([
//         'name'=>'required',
//         'father_name'=>'required',
//         'contact'=>'required',
//         'email'=>'required',
//         'address'=>'required',
//         'state'=>'required',
//         'city'=>'required',
//         'eductation'=>'required',
//         'dob'=>'required',
//     ]);
//     $std = new Student();
//     $std->name = $req->name;
//     $std->father_name = $req->father_name;
//     $std->address = $req->address;
//     $std->contact = $req->contact;
//     $std->email = $req->email;
//     $std->contact = $req->contact;
// }