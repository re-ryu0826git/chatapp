<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Group Modelを扱えるようになる
use App\Group;

class GroupController extends Controller
{
    //
    public function index()
    {
      $posts = Group::all();
      return view('group.index',['posts' => $posts]);
    }
    
    public function add()
    {
      return view('group.create');
    }
    
    public function create(Request $request)
    {
      //Varidation
      $this->validate($request, Group::$rules);
      
      $group = new Group;
      $form = $request->all();
      
      unset($form['_token']);
      
      //データベースへ保存
      $group->fill($form);
      $group->save();
      
      return redirect('group/create');
    }
    
}
