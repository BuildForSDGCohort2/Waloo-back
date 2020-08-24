<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class UsersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        User::create([
            'email' => $request->email,
            'name' => $request->name
        ]);
        
        return redirect('/');
    }
}
