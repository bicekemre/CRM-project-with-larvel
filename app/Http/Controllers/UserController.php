<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        $roles = Role::all();

        $services = Service::all();

        return view('user.index', compact('users', 'roles', 'services'));
    }

    public function create()
    {
        $roles = Role::all();

        $services = Service::all();

        return view('user.register', compact('roles', 'services'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $serviceId = $request->id_service;

        $user->services()->attach($serviceId);

        $roleId = $request->id_role;

        $user->roles()->attach($roleId);

        return redirect()->route('users.index')->with('success','User created successfully');
    }
    public function uppdate(Request $request)
    {
        $user = Auth::user();

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        $serviceId = $request->id_service;

        $user->services()->attach($serviceId);

        $roleId = $request->id_role;

        $user->roles()->attach($roleId);

        return redirect()->back()->with('success','User created successfully');
    }


    public function show()
    {
        if (Auth::check())
        {
            $user = \auth()->user();

            $roles = Role::all();

            $services = Service::all();

            $clients = Client::where(['id_sales_staff' => $user->getAuthIdentifier()])->get();
            return view('user.settings', compact('user', 'clients', 'roles', 'services'));
        }else{
            return view('auth.login');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);

        $roles = Role::all();

        $services = Service::all();
        return view('user.settings',compact('user', 'roles', 'services'));
    }

    public function clients($id)
    {
        $clients = Client::where('id_sales_staff', $id)->get();

        return view('clients.leads', compact('clients'));
    }


    public function view($id)
    {
        $user = User::find($id);

        $clients = Client::where(['id_sales_staff' => $user->getAuthIdentifier()])->get();
        return view('user.profile', compact('user', 'clients'));
    }


    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $request->input('current_password');
        $newPassword = $request->input('new_password');
        $confirmPassword = $request->input('confirm_password');

        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with([
                'confirm_password' => 'New password and password authentication do not match.',
            ]);
        }

        if (password_verify($currentPassword, $user->password)) {
            $user->password = bcrypt($newPassword);
            $user->save();
            return redirect()->back()->with('success', 'Your password has been successfully changed.');
        } else {
            return redirect()->back()->with([
                'current_password' => 'You entered your current password incorrectly.',
            ]);
        }
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }

}
