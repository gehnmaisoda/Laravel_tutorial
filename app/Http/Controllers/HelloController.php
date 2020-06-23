<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function index() {
    $datakamo = [
      ['name' => '山田多頭', 'email' => 'yamada@gmail.com'],
      ['name' => '岡山花子', 'email' => 'okayama@gmail.com']
    ];
    return view('hello.index', ['datadayo' => $datakamo]);
  }
}
