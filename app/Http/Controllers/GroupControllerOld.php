<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;


class GroupController extends Controller
{
    public function list()
    {
        $group = new Group;
        return view('groups/list', ['data' => $group->paginate(10)]);
    }

    public function create()
    {
        return view('groups/create');
    }

    public function edit($id)
    {
        $group = new Group;
        return view('groups/group-edit', ['data' => $group->find($id)]);
    }


    public function updateGroupSubmit($id, GroupRequest $req)
    {

        $group = Group::find($id);

        $group->name = $req->input('name');

        $group->save();

        return redirect()->route('list')->with('status', "Группа обновлена");
    }

    public function deleteGroup($id)
    {

        Group::find($id)->delete();

        return redirect()->route('list')->with('status', "Группа удалена");
    }

    public function submit(GroupRequest $req)
    {
        $group = new Group();
        $group->name = $req->input('name');
        $group->save();

        return redirect()->route('list')->with('status', 'Новая группа добавлена');
    }
}
