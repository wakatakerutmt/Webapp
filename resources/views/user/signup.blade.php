@extends('layouts.index')

@section('content')


<section class="login-field">
    <div class="login-wrapper">
      <h2>登録</h1>
      <div class="modal-contents">
          <div class="login-button">
            <a class="login-button-facebook">FaceBookで登録</a>
          </div>
          <div class="or-wrapper">
            <span>または</span>
            <hr>
          </div>
          <div class='login-email'>
            <form  action="/signup" accept-charset="UTF-8" method="post">
              {{ csrf_field() }}
              @if($errors->has('name'))
                {{$errors->first('name')}}<br/>
              @endif
              <label for="login_user_name"><input autofocus="autofocus" placeholder="名前" type="text" name="name" id="login_user_name" /></label>
              @if($errors->has('email'))
                {{$errors->first('email')}}<br/>
              @endif
              <label for="login_user_email"><input placeholder="メールアドレス" type="email" name="email" id="login_user_email" /></label>
              @if($errors->has('password'))
                {{$errors->first('password')}}<br/>
              @endif
              <label for="login_user_password"><input autocomplete="off" placeholder="パスワード" type="password" name="password" id="login_user_password" /></label>
              <div class='action-wrapper'>
                <input type="submit" name="commit" value="Sign Up" class="wt-ui-button wt-ui-button-blue" data-disable-with="Sign Up" />
                <hr>
              </div>
            </form>
          </div>
      </div>
    </div>
</section>

@endsection
