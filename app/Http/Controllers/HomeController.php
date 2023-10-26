<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function Home()
    {
        $services = Service::take(6)->get();

        $Role = Role::where('name', 'entreprise')->first();

        if ($Role) {
            $users = $Role->users;
        }
        return view('welcome', compact("services", "users"));
    }

    public function services()
    {
        $services = Service::all();
        $Role = Role::where('name', 'entreprise')->first();

        if ($Role) {
            $users = $Role->users;
        }
        return view('services',compact("users","services"));
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('profile-user', compact("user"));
    }
}
