<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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
            return redirect()->back()->with('error','Error: ha ocurrido un error'. $message); 
            // return response()->json($message);
        }
     
    }
    public function edit(User $user)
    {  
        try {

            return view('user.edit',['user' => $user]);
            

        } catch (\Exception $e) {

            $message = $e->getMessage();
            return redirect()->back()->with('error','Error: ha ocurrido un error'. $message); 
            // return response()->json($message);
        }
     
    }


    public function update(UserRequest $request,User $user)
    {
        try {

            $user->update([

                'name'     => $request->name,
                'email'    => $request->email,
                'address'  => $request->address,
                'city'     => $request->city,
              
            ]);

            return redirect()->route('users.index');
           
        } catch (\Exception $e) {

            $message = $e->getMessage();
            return redirect()->back()->with('error','Error: ha ocurrido un error'. $message); 
        }
 
    }

    public function getpassword(Request $request)
    {  
        try {

            return view('user.password');
            

        } catch (\Exception $e) {

            $message = $e->getMessage();
            return response()->json($message);
        }
     
    }
    
}
