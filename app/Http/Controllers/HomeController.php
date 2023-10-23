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
        $excludedRoles = ['user', 'admin'];

        // Get roles that are not in the excluded list
        $roles = Role::whereNotIn('name', $excludedRoles)->get();
        $usersByRole = [];

        foreach ($roles as $role) {
            $user = User::role($role->name)->first();
            if ($user) {
                $usersByRole[$role->name] = $user;
            }
        }
        return view('welcome', compact("services", "usersByRole"));
    }

    public function services()
    {
        return view('services');
    }
}
