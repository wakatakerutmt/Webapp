@extends('layouts.index')
@section('content')

<div class="contents">
<!--
 indexページ()
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

    <section class="main">
      <div class="main-message">
        <h1>「はたらく」をより面白く</h1>
        <p>ウォンテッドリー風SNSです。</p>
      </div>

      <div class="main-register-form">
          <div class="main-facebook-register">FaceBookで今すぐログイン</div>
          <div class="main-email-register">Emailで登録</div>
      </div>

      <div class="main-next-section-nav">MORE ABOUT WANTEDLY</div>
    </section>


    <section class="more-info">
        <h2>共感や人とつながり、シゴトでココロおどろう。無料です。</h2>
        <ul>
          <li>
            <!-- <img> -->
            <h3>であう</h3>
            <p>キラっと光るプロジェクトや会社を見つけて、気軽に訪問しよう</p>
          </li>
          <li>
            <!-- <img> -->
            <h3>つながる</h3>
            <p>キャリアプロフィールを作成<br/>
            　　人脈を構築し、広げよう
            </p>
          </li>
          <li>
            <!-- <img> -->
            <h3>つくる</h3>
            <p>
               ビジネス専用グループチャット<br/>
               Wantedly Chat で生産性を倍に
            </p>
          </li>
    </section>


</div>

@endsection
