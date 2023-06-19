<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Revenue;
use App\Models\Role;
use App\Models\Source;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{


    public function index ()
    {
        $clients  =  CLient::where(['type' => 'client'])->orderBy('id', 'desc')->paginate(10);

        $sources = Source::all();


        foreach ($sources as $source) {
            $sourcesNames[] = $source->name;
        }

        return view('clients.index', compact('clients', 'sources', 'sourcesNames'));
    }

    public function getSourceCounts()
    {
        $sourceCounts = Client::select('id_source', DB::raw('count(*) as client_count'))
            ->groupBy('id_source')
            ->get();


        return response()->json(['data' => $sourceCounts]);
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
        $leads = Client::where(['type' => 'lead'])->paginate(10);


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

    public function delete(Request $request, $id = null)
    {

        $selected = [];

        if ($id) {
            $selected[] = $id;
        } else {
            $selected = $request->id;
        }

        if ($selected) {
            Client::whereIn('id', $selected)->delete();

            return redirect()->route('clients')->with('success', 'Selected items have been deleted successfully.');
        }

        return redirect()->route('clients')->with('error', 'No items selected or an error occurred.');
    }
}
