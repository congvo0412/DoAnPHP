<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class AccountController extends Controller
{
    public function index()
    {
        $data = Account::all();
        return view('demoaccount.index',compact('data'));
    }
    public function view($id)
    {
        return view('demoaccount.view');
    }
}
