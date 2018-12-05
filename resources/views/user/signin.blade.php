@extends('layouts.user_base')
 @section('content')
   <form action="" method="post" style="width:500px; margin: 0 auto;">
    {{ csrf_field() }}
    @if($errors->has('name'))
      {{$errors->first('name')}} <br/>
    @endif
    <label>name:<input type="text" name="name"></label><br/>
    @if($errors->has('email'))
      {{$errors->first('email')}}<br/>
    @endif
    <label>email:<input type="text" name="email"></label><br/>
    @if($errors->has('password'))
      {{$errors->first('password')}}<br/>
    @endif
    <label>password:<input type="password" name="password"></label><br/>
    <label><input type="submit" value="send"></label>
  </form>
 @endsection
