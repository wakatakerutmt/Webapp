@extends('layouts.index')
@section('content')

    <div class="plain">&nbsp;</div>
     <!-- デバッグ
     @if (Auth::check())
     <p> ユーザー名: {{ $user->name }} , メール： {{ $user->email }} ,
       <form action="/logout" method="POST">
           {{ csrf_field() }}
             <label><input type="submit" value="ログアウト"></label>
       </form>
        <a href="/profile">プロフィール</a>
    @else
     <a href="/login">ログイン</a> | <a href="/signup">登録</a>
    @endif -->


    <div class="main-message">
      <div class="left">&nbsp;</div>
      <img src="https://de7iszmjjjuya.cloudfront.net/assets/about/root/img_visutal_text_ja-f59b30d3c5f12201cdfe39a9c6070d05358c1335d78614c0edd8c48cae5b4470.png">
      <div class="right">&nbsp;</div>
    </div>

    <div class="main-section">
      <p>ウォンテッドリーは、月間200万人が利用するビジネスSNSです</p>
      <div class="main-register-form">
          <div class="main-facebook-register">FaceBookで今すぐログイン</div>
          <a class="main-email-register" href="/signup">Emailで登録</a>
      </div>

      <div class="main-next-section-nav">MORE ABOUT WANTEDLY</div>
    </div>

    <section class="more-info">
      <div class="container">
        <h2>共感で人や企業とつながり、シゴトでココロおどろう。無料です。</h2>
        <ul>
          <li>
            <img alt="" src="img/meet.png" width="300" height="170">
            <h3>であう</h3>
            <p>キラっと光るプロジェクトや<br/>
              会社を見つけて、気軽に訪問しよう</p>
          </li>
          <li>
            <img alt="" src="img/connect.png" width="300" height="170">
            <h3>つながる</h3>
            <p>キャリアプロフィールを作成<br/>
              人脈を構築し、広げよう
            </p>
          </li>
          <li>
            <img alt="" src="img/create.png" width="300" height="170">
            <h3>つくる</h3>
            <p>
               ビジネス専用グループチャット<br/>
               Wantedly Chat で生産性を倍に
            </p>
          </li>
        </div>
    </section>

@endsection
