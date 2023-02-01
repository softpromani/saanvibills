<?php

namespace App\Http\Controllers\RolePermission;

use App\Http\Controllers\Controller;
use App\Models\PermissionName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function PermissionPage(Request $request)
    {
         $permissions = PermissionName::paginate(20);
        return view('role_permissions.permission',compact('permissions'));
    }


    public function storePermission(Request $request)
    {
        $request->validate([
            'permission' => 'required|unique:permission_names,name',
        ]);
        $perm = PermissionName::create(['name' => $request->permission]);
        if (isset($perm)) {
            $permission = Permission::create(['name' => $request->permission, 'perm_id' => $perm->id]);
            Permission::create(['name' => $request->permission . '_create', 'perm_id' => $perm->id]);
            Permission::create(['name' => $request->permission . '_read', 'perm_id' => $perm->id]);
            Permission::create(['name' => $request->permission . '_update', 'perm_id' => $perm->id]);
            Permission::create(['name' => $request->permission . '_delete', 'perm_id' => $perm->id]);
            if (isset($permission)) {
                return redirect()->back()->with('toast_success', 'Permission has been created successfully !');
            }
        }
    }

    public function assign_permission_view()
    {   $roles=Role::get();
        return view('role_permissions.role_has_permission',compact('roles'));
    }

    public function fetch_permissions(Request $req)
    {
       $selectrole=Role::find($req->data);
       $roles=Role::all();
       $permissionnames=PermissionName::all();
       return view('role_permissions.fetch_permissions',compact('roles','permissionnames','selectrole'));
    }

    public function assign_permission(Request $request)
    {
        $request->validate([
            'roleid'=>'required|exists:roles,id',
            'rolepermissions'=>'required|array'
        ]);
        $role=Role::find($request->roleid);
        if($role->syncPermissions($request->rolepermissions)){
            Alert::toast('Permission Assign Successfully','success');
        }
        else
        {
           Alert::error('OOP\'s','Something Went Wrong');
        }
        return redirect()->back();


    }

}
