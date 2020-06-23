@extends('layouts.blog')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです</p>
  <ul>
    @each('components.item', $datadayo, 'item')
  </ul>  
@endsection

@section('footer')
copyright 2020 shingo.
@endsection


