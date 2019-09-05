<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
    public function index()
    {
      return view('group.index');
    }
    
    public function add()
    {
      return view('group.create');
    }
    
    public function create()
    {
      return redirect('group.create');
    }
    
}
