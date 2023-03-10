<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
{
    $users = User::all();
    foreach ($users as $user) {
        $email = $user->email;
        $hash = md5(strtolower(trim($email)));
        $user->gravatarUrl = "https://www.gravatar.com/avatar/{$hash}?s=200&d=mp";
    }

    return view('users.index', compact('users'));
}

public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'user_role' => 'required',
        ],[
            'name.required' => 'The name field is required.',
            'username.required' => 'The Username field is required.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email address is already taken.',
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.min' => 'The password must be at least 8 characters.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_role' => $request->user_role
        ]);

        return redirect()->route('admin.users')
            ->with('success','User created successfully.');
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {

/* 
$request->validate([
            'name' => 'required',
            'username' => 'required|unique:users'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'sometimes|min:8',
            'user_role' => 'required',
        ],[
            'name.required' => 'The name field is required.',
            'username.required' => 'The username field is required.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email address is already taken.',
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.min' => 'The password must be at least 8 characters.',
            'user_role.required' => 'The User Role field is required.',
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'user_role' => $request->user_role,
        ]);

*/

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            //'password' => 'sometimes|min:8',
        ],[
            'name.required' => 'The name field is required.',
            'username.required' => 'The username field is required.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email address is already taken.',
           
            'user_role.required' => 'The User Role field is required.',
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'user_role' => $request->user_role,
        ]);

        if ($request->password) {
           $user->update(['password' => bcrypt($request->password)]);
        }

        return redirect()->route('admin.users')
            ->with('success','User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users')
            ->with('success','User deleted successfully');
    }

}
