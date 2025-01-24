<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Roles\EloquentRole;
use Illuminate\Support\Str;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Session;

class RoleController extends Controller
{
    public function index(){

        $roles = EloquentRole::all();

        return view('admin.roles.index',compact('roles'));

    }

    public function create(){

        $data = array();
        $permissions = Permission::where('parent_id', 0)->get();
        foreach ($permissions as $permission) {
            array_push($data, $permission);
            $subs = Permission::where('parent_id', $permission->id)->get();
            foreach ($subs as $sub) {
                array_push($data, $sub);
            }
        }

       
        return view('admin.roles.create', compact('data'));

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);

        $role = new EloquentRole();
        $role->name = $request->name;
        $role->slug = Str::slug($request->name, '_');
        $role->save();

        if (!empty($request->permission)) {
            foreach ($request->permission as $key) {
                $role->updatePermission($key, true, true)->save();
            }
        }

        Session::flash('success', 'Role added successfull!');
        return redirect('roles/view');
    }

    public function edit($role_id){

        $data = array();
        $permissions = Permission::where('parent_id', 0)->get();
        foreach ($permissions as $permission) {
            array_push($data, $permission);
            $subs = Permission::where('parent_id', $permission->id)->get();
            foreach ($subs as $sub) {
               array_push($data, $sub);
            }
        }

        $role = EloquentRole::find($role_id);

        return view('admin.roles.edit',compact('role','data'));

    }

    public function update(Request $request, $role_id)
    {
        //return print_r($request->permission);
        $role = Sentinel::findRoleById($role_id);
        $role->name = $request->name;
        $role->slug = Str::slug($request->name, '_');
        $role->permissions = array();
        $role->save();
        //remove permissions which have not been ticked
        //create and/or update permissions
        if (!empty($request->permission)) {
            foreach ($request->permission as $key) {
                $role->updatePermission($key, true, true)->save();
            }
        }
        Session::flash('success', 'Role edited successfull!');
        return redirect('roles/view');
    }

    public function delete($role_id)
    {
        $delete = EloquentRole::destroy($role_id);

        Session::flash('error', 'Role deleted successfull!');
        return redirect('roles/view');
    
    }
}
