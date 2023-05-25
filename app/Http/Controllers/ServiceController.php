<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Revenue;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service ()
    {
        $services = Service::all();


        return view('clients.services',compact('services'));
    }

    public function clients ($id)
    {
        $clients = Client::where(['id_service' => $id])->get();


        return view('clients.index', compact('clients'));
    }

    public function revenue($id)
    {
        $revenues = Revenue::where(['id_service' => $id])->get();

        return view('clients.clients-revenues', compact('revenues'));
    }

    public function staff($id)
    {
        $staffs = User::where(['id_service' => $id])->get();

        return view('clients.clients-staffs', compact('staffs'));
    }

}
