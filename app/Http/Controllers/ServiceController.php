<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Expense;
use App\Models\Revenue;
use App\Models\Role;
use App\Models\Service;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service ()
    {
        $services = Service::all();


        return view('services.index',compact('services'));
    }

    public function show($id)
    {
        $service = Service::find($id);

        $clients = Client::where(['id_source' => $id])->paginate(10);

        $users = User::whereHas('services', function ($query) use ($id) {
            $query->where('service_id', $id);
        })->paginate(10);

        $tasks = Task::where(['id_service' => $id])->paginate(10);

        $revenues = Revenue::where(['id_service' => $id])->paginate(10);

        $expenses = Expense::where(['id_service' => $id])->paginate(10);

        return view('services.services-overview', compact('service','clients', 'users', 'tasks', 'expenses', 'revenues'));
    }

    public function clients ($id)
    {
        $clients = Client::where(['id_service' => $id])->get();


        return view('clients.index', compact('clients'));
    }

    public function revenue($id)
    {
        $revenues = Revenue::where(['id_service' => $id])->get();

        return view('accounting.payments.payments', compact('revenues'));
    }

    public function staff($id)
    {
        $users = User::whereHas('services', function ($query) use ($id) {
            $query->where('service_id', $id);
        })->get();

        return view('user.index', compact('users'));
    }

}
