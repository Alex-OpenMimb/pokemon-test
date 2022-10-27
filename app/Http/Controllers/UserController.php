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
        // return $request;
        try {

            $user->update([

                'name'     => $request->name,
                'email'    => $request->email,
                'address'  => $request->address,
                'birthdate'  => $request->birthdate,
                'city'     => $request->city,
              
            ]);

            return redirect()->route('users.index');
           
        } catch (\Exception $e) {

            $message = $e->getMessage();
            return redirect()->back()->with('error','Error: ha ocurrido un error'. $message); 
        }
 
    }

    public function editpassword(User $user)
    {  
        try {
        
            return view('user.password',['user' => $user]);
            

        } catch (\Exception $e) {

            $message = $e->getMessage();
            return response()->json($message);
        }
     
    }

    public function updatepassword(Request $request,User $user)
    {

        $request->validate([
            'password' => 'bail|required|string|min:6',
        ]);

        try {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->back()->with('update','ok');
            
        } catch (\Exception $e) {
           
            $message = $e->getMessage();
            return redirect()->back()->with('error','Error: ha ocurrido un error'. $message); 
        }



    }
    
}
