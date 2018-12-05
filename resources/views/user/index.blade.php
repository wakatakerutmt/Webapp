@extends('layouts.index')
 @section('content')
 indexページ
 @if (Auth::check())
 <p> ユーザー名: {{ $user->name }} , メール： {{ $user->email }} ,
   <form action="/logout" method="POST">
       {{ csrf_field() }}
         <label><input type="submit" value="ログアウト"></label>
   </form>
    <a href="/profile">プロフィール</a>
@else
 <a href="/login">ログイン</a> | <a href="/signup">登録</a>
@endif

@php
  print_r($user);
@endphp

@endsection
