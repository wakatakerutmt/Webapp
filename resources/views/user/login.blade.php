@extends('layouts.index')
@section('content')

<section class="login-field">
    <div class="login-wrapper">
      <h2>ログイン</h1>
      <div class="modal-contents">
          <div class="login-button">
            <a class="login-button-facebook">FaceBook</a>
          </div>
          <div class="or-wrapper">
            <span>または</span>
            <hr>
          </div>
          <div class='login-email'>
            <form  action="/login" accept-charset="UTF-8" method="post">
              {{ csrf_field() }}
              @if($errors->has('email'))
                {{$errors->first('email')}}<br/>
              @endif
              <label for="login_user_email"><input autofocus="autofocus" placeholder="メールアドレス" type="email" name="email" id="login_user_email" /></label>
              @if($errors->has('password'))
                {{$errors->first('password')}}<br/>
              @endif
              <label for="login_user_password"><input autocomplete="off" placeholder="パスワード" type="password" name="password" id="login_user_password" /></label>
              <div class='forgot-password-wrapper'>
                  <a class="forgot-password" href="/user/password/new">パスワードをお忘れですか？</a>
              </div>
              <div class='action-wrapper'>
                  <input type="submit" name="commit" value="ログイン" class="wt-ui-button wt-ui-button-blue" data-disable-with="ログイン" />
                  <hr>
                  <div class='register'>
                    <span>初めてご利用ですか？</span>
                    <a href="/signup">登録</a>
                  </div>
              </div>
            </form>
          </div>
      </div>
    </div>
</section>

@endsection
