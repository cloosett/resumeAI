<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(10);
        return view('admin.role', compact('roles'));
    }

    public function create()
    {
        return view('admin.rolecreate');
    }

    public function store(Request $request)
    {
        Role::create([
            'name' => $request->role
        ]);
        return redirect()->route('admin.role');
    }

    public function edit(Role $role){
        return view('admin.roleedit', compact('role'));
    }

    public function update(Request $request, Role $role){
        $role->update([
            'name' => $request->role
        ]);
        return redirect()->route('admin.role');
    }

    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('admin.role');
    }

}
