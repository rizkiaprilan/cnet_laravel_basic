<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Student Club List';

        $data = Club::all();
        // dd($data);

        return view('club/home',[
            'judul' => $title,
            'data' => $data,
        ]);
    }

    public function create()
    {
        $title = "Creating New Club";

        return view('club/create',[
            "judul" => $title
        ]);
    }

    public function store(Request $request)
    {
        $validateClub = $request->validate([
            'name' => 'required|min:5|max:50',
            'description' => 'required|min:5',
        ]);

        Club::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('/club');
    }

    public function show($id)
    {
        $title = "List Student Club Detail";
        $data = Club::where('id','=',$id)->first();
        // $data = Student::where('majority_id','=',$id)->get();
        // dd($data);

        return view('club/show',[
            'data' => $data,
            'judul' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Edit Club";

        $data = Club::find($id);

        return view('club/edit',[
            "judul" => $title,
            "data" => $data
        ]);
    }

    public function update(Request $req)
    {
        Club::where('id','=',$req->id)
        ->update([
            'name' => $req->name,
            'description' => $req->description
        ]);

        return redirect('/club');
    }

    public function destroy($id)
    {
        // DB::table('departments')->where('id','=',$id)->delete();
        $data = Club::find($id);

        // soft delete
        $data->delete();

        // permanent delete
        // $data->forceDelete();

        return redirect('/club');
    }
}
