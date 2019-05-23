<?php
//controler dokument för att göra web.php finare
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //funktioner för att routesen ska hitta rätt sida
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function login()
    {

        $account = \App\User::all();

        return view('login', compact('account'));
    }

    public function store()
    {
        $account = new \App\User();
        $account->firstname = request('firstname');
        $account->lastname = request('lastname');
        $account->email = request('email');
        $account->Password = request('Password');
        $account->accounttype = request('accounttype');
        $account->save();

        return redirect('/login');
    }


    public function designers()
    {
        return view('Designers');
    }
}
