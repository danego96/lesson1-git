<?php

namespace App\Http\Controllers;
use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class GroupController extends Controller
{
    public function list(){
        $group = new Group;
        return view('groups/list',['data' => $group -> paginate(3)]);
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

    public function submit(GroupRequest $req) {

        $group = new Group();
  
        $group->name = $req->input('name');
  
        $group -> save();
        
        return redirect() ->route('list')->with('status', 'Новая группа добавлена');
      }

    }
