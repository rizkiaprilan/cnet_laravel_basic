<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Majority;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'List Students';

        $data = Student::all();

        return view('student/home',[
            'judul' => $title,
            'data' => $data]);
    }

    public function create()
    {
        $title = "Inserting Student";
        $majority = Majority::all();

        return view('student/create',[
            "judul" => $title,
            "majority" => $majority
        ]);
    }

    public function store(Request $request)
    {
        $validateStudent = $request->validate([
            'name' => 'required|min:5|max:50',
            'address' => 'required|min:5',
        ]);

        Student::create([
            'majority_id' => $request->majority_id,
            'name' => $request->name,
            'address' => $request->address
        ]);

        return redirect('/student');
    }

    public function show($id)
    {
        $title = "Detail Club Student";
        $data = Student::where('id','=',$id)->first();
        // $data = Student::where('majority_id','=',$id)->get();
        // dd($data);

        return view('student/show',[
            'data' => $data,
            'judul' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Edit Students";

        $data = Student::find($id);
        $majority = Majority::all();

        return view('student/edit',[
            "judul" => $title,
            "data" => $data,
            'majority' => $majority
        ]);
    }

    public function update(Request $req)
    {
        Student::where('id','=',$req->id)
        ->update([
            'majority_id' => $req->majority_id,
            'name' => $req->name,
            'address' => $req->address,
        ]);

        return redirect('/student');
    }

    public function destroy($id)
    {
        // DB::table('departments')->where('id','=',$id)->delete();
        $data = Student::find($id);

        // soft delete
        $data->delete();

        // permanent delete
        // $data->forceDelete();

        return redirect('/student');
    }
}
