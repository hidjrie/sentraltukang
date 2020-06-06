<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    public function index(Request $request):JsonResponse {
        $users = User::orderBy('created_at', 'DESC')->get();
        return response()->json($users);
    } 
}
