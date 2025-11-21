<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseWrapper;
use App\Models\User;

class UserController extends Controller
{
    //
    public function show_user(string $id)
    {
        $user = User::with("employee")->find($id);
        if (!$user) {
            return ResponseWrapper::make("User not found", 404, null, null);
        }
        return ResponseWrapper::make("User found", 200, ["user" => $user], null);
    }
}
