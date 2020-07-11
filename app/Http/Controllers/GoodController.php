<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GoodController extends Controller
{
  public function index(Request $request) {
    $users = DB::select('select * from people');
    return view('good.index', ['users'=>$users]);
  }
  
  public function add(){
    return view('good.add');
  }
  
  public function create(Request $request){
    $param = [
      'name' => $request->name,
      'email' => $request->email,
      'age' =>$request->age,
    ];
    DB::insert('insert into people (name, email, age) values(:name, :email, :age)', $param);
    return redirect('/good');
  }
  
  public function edit(Request $request){
    $param = ['id' => $request->id];
    $user = DB::select('select * from people where id = :id', $param);
    return view('good.edit', ['form'=>$user[0]]);
  }
  
  public function update(Request $request){
    $param = [
      'id'=>$request->id,
      'name'=>$request->name,
      'email'=>$request->email,
    ];
    DB::update('update people set name = :name, email = :email where id = :id', $param);
    return redirect('/good');
  }
}


