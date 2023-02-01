<?php

namespace App\Http\Controllers\RolePermission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function RolePage()
    {
        $roles=Role::get();
        return view('role_permissions.role',compact('roles'));
    }

    public function CreateRole(Request $request)
    {
        $request->validate([
            'role' => 'required',
        ]);
        Role::create([
            'name' => $request->role
        ]);

        return redirect()->back()->with('toast_success', 'Role has been created successfully.');
    }
}
