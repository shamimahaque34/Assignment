<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
   

    public function getAllUsers()
    {
            $this->users = User::orderBy('id','desc')->get();
            return response()->json($this->users);  
        
     }
}
