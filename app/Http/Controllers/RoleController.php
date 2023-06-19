<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }

    public function create()
    {

        $permissions = Permission::all();

        return view('roles.insert', compact('permissions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
        ]);

        $role = new Role();
        $role->name = $request->input('name');
        $role->save();

        $permissions = $request->input('permissions');

        foreach ($permissions as $permissionId) {
            $permission = Permission::find($permissionId);

            if ($permission) {
                $role->permissions()->attach($permission);
            }
        }

        return redirect()->back()->with('success', 'Role created successfully.');
    }


    public function edit($id)
    {
        $role  =  Role::find($id);

        $permissions = Permission::all();


        return view('roles.update', compact('role','permissions'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:roles,name,' . $id,
            'permissions' => 'nullable|array',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();

        $permissions = $request->input('permissions');

        $role->permissions()->detach();

        if (!empty($permissions)) {
            foreach ($permissions as $permissionId) {
                $permission = Permission::find($permissionId);

                if ($permission) {
                    $role->permissions()->attach($permission);
                }
            }
        }

        return redirect()->back()->with('success', 'Role updated successfully.');
    }

    public function permissions()
    {
        $routeCollection = Route::getRoutes();


        foreach ($routeCollection as $route) {
            $name = $route->getName();

            if ($name && !Permission::where('name', $name)->exists()) {
                Permission::create(['name' => $name]);
            }
        }

        $permissions = Permission::all();

        $role = Role::where(['name' => 'god'])->first();
        $role->permissions()->attach($permissions);


        return view('roles.permissions', compact('permissions'));
    }


    public function delete($id)
    {
        $role = Role::find($id);

        $role->permissions()->detach();

        $role->delete();

        return redirect()
            ->route('roles')
            ->with('success', ' deleted successfully.');
    }




}
