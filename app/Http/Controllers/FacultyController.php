<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class FacultyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'List Faculty';

        $data = Faculty::all();

        return view('faculty/home',[
            'judul' => $title,
            'data' => $data
        ]);
    }

    public function create()
    {
        $title = "Insert Faculty";

        return view('faculty/create',["judul" => $title]);
    }

    public function store(Request $request)
    {
        $validateFaculty = $request->validate([
            'name' => 'required|min:5|max:50',
            'code' => 'required|unique:faculties,code'
        ]);

        // dd($request);
        Faculty::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect('/faculty');
    }

    public function show($id)
    {
        $title = "Detail Faculty";
        $data = Faculty::where('id','=',$id)->first();
        // $data = Position::where('department_id','=',$id)->get();

        return view('faculty/show',[
            'data' => $data,
            'judul' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Edit Faculty";

        // $data = Department::where('id','=',$id)->find();
        $data = Faculty::find($id);

        return view('faculty/edit',[
            "judul" => $title,
            "data" => $data
        ]);
    }

    public function update(Request $req)
    {
        Faculty::where('id','=',$req->id)
        ->update([
            'name' => $req->name,
            'code' => $req->code
        ]);

        return redirect('/faculty');
    }

    public function destroy($id)
    {
        // DB::table('departments')->where('id','=',$id)->delete();
        $data = Faculty::find($id);

        // soft delete
        $data->delete();

        // permanent delete
        // $data->forceDelete();

        return redirect('/faculty');
    }
}
