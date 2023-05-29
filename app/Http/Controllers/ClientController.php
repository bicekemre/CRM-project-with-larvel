<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Revenue;
use App\Models\Role;
use App\Models\Source;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index ()
    {
        $clients  =  CLient::where(['type' => 'client'])->orderBy('id', 'desc')->get();

        return view('clients.index', compact('clients'));
    }

    public function create ($type)
    {
        $sources = Source::all();

        $role = Role::where(['name' => 'staff_sales'])->get()->first();

        $roleId = $role->id;

        $staffs = User::whereHas('roles', function ($query) use ($roleId) {
            $query->where('id', $roleId);
        })->get();


        return view('clients.insert', compact('sources', 'staffs', 'type'));
    }

    public function store(Request $request,$type)
    {
        $client = new Client();

        $request->validate($client->rules(), $client->messages());

        $client = Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'type' => $type,
            'id_source' => $request->id_source,
            'source_desc' => $request->source_desc,
            'id_sales_staff' => $request->id_sales_staff,
        ]);
        $client->save();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client registered successfully.')
            ->withInput($request->except(['password']));
    }

    public function edit($id, $type)
    {
        $sources = Source::all();

        $client = Client::find($id);

        $role = Role::where(['name' => 'staff_sales'])->get()->first();

        $roleId = $role->id;

        $staffs = User::whereHas('roles', function ($query) use ($roleId) {
            $query->where('id', $roleId);
        })->get();

        return view('clients.update', compact('client','staffs', 'sources', 'type'));
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $request->validate($client->rules(), $client->messages());

        $client->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'type' => $request->type,
            'id_source' => $request->id_source,
            'source_desc' => $request->source_desc,
            'id_sales_staff' => $request->id_sales_staff,
        ])->save();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client registered successfully.')
            ->withInput($request->except(['password']));
    }

    public function leads ()
    {
        $leads = Client::where(['type' => 'lead'])->get();


        return view('clients.leads',compact('leads'));
    }

    public function changeLead ($id)
    {
        $lead = Client::find($id);

        $lead->update(['type' => 'client']);

        return redirect('/leads');
    }

    public function profile($id)
    {
        $client  = Client::find($id);

        $revenues = Revenue::where(['id_client' => $id])->get();

        return view('clients.profile' , compact('client', 'revenues'));
    }

    public function delete($id)
    {
        $client = Client::find($id);

        $client->delete();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client deleted successfully.');
    }
}
