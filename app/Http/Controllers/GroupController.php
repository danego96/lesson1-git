<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function list(){
        return view('groups/show');
    }

    public function create(){
        return view('groups/create');
    }
    
    public function edit(){
        return view('groups/form');
    }

    public function delete(){
        return view('groups/show');
    }
}
