<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.users.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {

        $roles = Role::pluck('id','role');
//        $roles = Role::all();
//        dd($roles);
        return view('admin.users.edit', compact('user', 'roles'));
    }


    public function update(Request $request, $id)
    {
        dd($request->all());
        //
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User deleted');
    }
}
