<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Credit;

class CreditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = 'Credit Card Detail';

        $data = Credit::all();
        $card = Card::all();
        //dd($data);

        return view('credit/home',[
            'judul' => $title,
            'data' => $data,
            'card' => $card
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
