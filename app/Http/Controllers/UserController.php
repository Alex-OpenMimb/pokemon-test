<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        try {
            
            $users = User::all();

            return view('user.table',['users'=> $users]);
            

        } catch (\Exception $e) {

            $message = $e->getMessage();
            return response()->json($message);
        }
     
    }
    
}
