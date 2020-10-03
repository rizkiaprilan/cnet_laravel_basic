<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Credit;

class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Student Cards List';

        $data = Card::all();
        $credit = Credit::all();

        return view('card/home',[
            'judul' => $title,
            'data' => $data,
            'credit' => $credit
        ]);
    }

    public function create()
    {
        $title = "Create Student Cards";

        return view('card/create',[
            "judul" => $title
        ]);
    }

    public function store(Request $request)
    {
        $validateCard = $request->validate([
            'nim' => 'required|numeric',
            'balance' => 'required|numeric|max:1000000',
            'credit_name' => 'required|min:5',
            'credit_balance' => 'required|numeric|max:10000000',
        ]);

        Card::create([
            'nim' => $request->nim,
            'balance' => $request->balance,
        ]);

        $last_card = Card::where
        ('nim','=',$request->nim)->get()->last();

        Credit::create([
            'card_id' => $last_card->id,
            'name' => $request->credit_name,
            'balance' => $request->credit_balance,
        ]);

        return redirect('/card');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = "Edit Student Cards";

        $data = Card::find($id);

        return view('card/edit',[
            "judul" => $title,
            "data" => $data
        ]);
    }

    public function update(Request $req)
    {
        Card::where('id','=',$req->id)
        ->update([
            'nim' => $req->nim,
            'balance' => $req->balance
        ]);

        Credit::where('id','=',$req->id_credits)
        ->update([
            'card_id' => $req->id,
            'name' => $req->credit_name,
            'balance' => $req->credit_balance
        ]);

        return redirect('/card');
    }

    public function destroy($id)
    {
        // DB::table('departments')->where('id','=',$id)->delete();
        $data = Card::find($id);

        // soft delete
        $data->delete();

        // permanent delete
        // $data->forceDelete();

        return redirect('/card');
    }
}
