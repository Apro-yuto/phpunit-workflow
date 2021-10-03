<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NameController extends Controller
{
    public function index () {
        $item = Name::select('id', 'last_name', 'first_name')->get();
        // dd($item);
        return view('top', ['data' => $item]);
    }

    public function postRegister (Request $req) {
        $name = app(Name::class);
        $name->last_name = $req->lastName;
        $name->first_name = $req->firstName;
        $name->save();
        return redirect('/');
    }
}
