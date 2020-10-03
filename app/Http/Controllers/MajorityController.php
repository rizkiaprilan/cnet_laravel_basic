<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Majority;
use App\Faculty;

class MajorityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'List Majority';

        $data = Majority::all();

        return view('majority/home',[
            'judul' => $title,
            'data' => $data
        ]);
    }

    public function create()
    {
        $title = "Insert Majority";
        $faculty = Faculty::all();

        return view('majority/create',[
            "judul" => $title,
            'faculty' => $faculty
        ]);
    }

    public function store(Request $request)
    {
        $validateMajority = $request->validate([
            'name' => 'required|min:5|max:50',
        ]);

        Majority::create([
            'faculty_id' => $request->faculty_id,
            'name' => $request->name
        ]);

        return redirect('/majority');
    }

    public function show($id)
    {
        $title = "Detail Majority";
        $data = Majority::where('id','=',$id)->first();
        // $data = Position::where('department_id','=',$id)->get();

        return view('majority/show',[
            'data' => $data,
            'judul' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Edit Majority";

        $data = Majority::find($id);
        $faculty = Faculty::all();

        return view('majority/edit',[
            "judul" => $title,
            "data" => $data,
            'faculty' => $faculty
        ]);
    }

    public function update(Request $req)
    {
        Majority::where('id','=',$req->id)
        ->update([
            'faculty_id' => $req->faculty_id,
            'name' => $req->name,
        ]);

        return redirect('/majority');
    }

    public function destroy($id)
    {
        // DB::table('departments')->where('id','=',$id)->delete();
        $data = Majority::find($id);

        // soft delete
        $data->delete();

        // permanent delete
        // $data->forceDelete();

        return redirect('/majority');
    }
}
