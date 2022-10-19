<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Excel;
use App\Exports\UserExport;
use App\Imports\UserImport;


class UserController extends Controller
{
    public function exportUser(){
        return Excel::download(new UserExport,'users.xlsx');
     }

     public function importUser(Request $request){
        return Excel::import(new UserImport, $request->file('file')->store('files'));
       
     }

     public function import(){
        return view('user.import');
     }
}
