<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        echo 'this is admin dashboard';
    }

    public function manager()
    {
        echo 'this is manager dashboard';
    }

    public function test()
    {
        return 'This is test';
    }

    //check allow access
    public function delete(){

        if(Gate::allows('isAdmin')){
            return 'Admin allow for this action';
        }else{
            return 'You are not allow for this action';
        }
    }

    //check denie access
    public function delete_denies(){

        if(Gate::denies('isAdmin')){
            return 'You are not admin';
        }else{
            return 'Admin allowed';
        }
    }

    //check Admin Action
    public function check_authorized_admin(){

        $this->authorize('isAdmin');

    }

    //check User Action
    public function check_authorized_user(){

        $this->authorize('isUser');

    }

    //check Manager Action
    public function check_authorized_manager(){

        $this->authorize('isManager');

    }


}
