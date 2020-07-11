<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HelloController extends Controller
{
  
  public function index(Request $request){
    return view('hello.index', ['msg' => '']);
  }
  
  public function post(Request $request){
    $rules = [
      'name' => 'required',
      'email' => 'email',
      'age' => 'numeric|between:0, 150',
    ];
  
    $messages = [
      'name.required' => '必須の入力項目です。',
      'email.email' => '適切なemailを設定してください',
      'age.numeric' => '数字で入力してください',
      'age.between' => '正しい数字を入力してください',
    ];
    
    
    $validator = Validator::make($request->all(), $rules, $messages);
    
    if ($validator->fails()) {
      return redirect('/hello')
        ->withErrors($validator)
        ->withInput();
    }
    
    return view('hello.index', ['msg' => '正しく入力されました！']);
  }
}
