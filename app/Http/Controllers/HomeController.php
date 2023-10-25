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
        // Define an array of roles to exclude

        // Find the "admin" role by name.
        $Role = Role::where('name', 'entreprise')->first();

        if ($Role) {
            $users = $Role->users;
        }
        return view('welcome', compact("services", "users"));
    }

    public function services()
    {
        return view('services');
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('profile-user', compact("user"));
    }
}
