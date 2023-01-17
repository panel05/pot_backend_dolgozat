<?php

namespace App\Http\Controllers;

use App\Models\clubs;
use App\Models\User;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(){
        $clubs = response()->json(clubs::all());
        return $clubs;
    }

    public function show($id){
        $clubs = response()->json(clubs::find($id));
        return $clubs;
    }

    public function destroy($id){
        clubs::find($id)->delete();
    }
    public  function store(Request $request){
        $clubs = new clubs();
        $clubs->establishment = $request->establishment;
        $clubs->location = $request->location;
        $clubs->max_number = $request->max_number;
        $clubs->save();
    }

    public function update(Request $request, $id){
        $clubs = clubs::find($id);
        $clubs->establishment = $request->establishment;
        $clubs->location = $request->location;
        $clubs->max_number = $request->max_number;
        $clubs->save();
    }

    public function newView(){
        $users = User::all();
        return view('clubs.new', ['users' => $users]);
    }

    public function editView($id){
        $users = User::all();
        $clubs = clubs::find($id);
        return view('clubs.edit', ['users'=>$users, 'clubs' => $clubs]);

    }

    public function listView(){
        $clubs = clubs::all();
        return view('club.list', ['clubs' => $clubs]);
    }
}
