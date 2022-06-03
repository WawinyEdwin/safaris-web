<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    //All Users
    public function users() {

        $users = User::all();

        return view('users.index', compact('users'))->with('i', (request()->input('page', 1) -1) * 5);
    }


    //credentials page.
    public function updateView($id) {

        $user = User::find($id);

        return view('auth.register', compact('user'));
    }

     //credentials update
    public function update(Request $request, User $user,  $id)
    {
       
        if($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Password does not match');
        }

        $user = new User;
        $user = User::find($id);

        if($request->name || $request->email || $request->password ) {

            $user->name = $request->name;

            // $user->email = $request->email;

            $user->password = Hash::make($request->password);
        

        } else {

            unset($user['name']);
            // unset($user['email']);
            unset($user['password']);

        }   

        $user->update();

        return redirect()->route('users')->with('success', 'Credentials updated successfully');
    }

    public function destroy($id) {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User Deleted Successfully');
    }
}
