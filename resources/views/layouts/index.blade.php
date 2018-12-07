<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Wantedly</title>
  <link rel="icon" href="">
  <meta name="description" content="wantedly風サイト">

  <!-- bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/user.css">
</head>


<body id="body">
  <header>
      <nav class="navigation">
          <ul>
              <li class="nav-left"><a href="/"><img src="img/title.png" alt="wantedly"></a></li>
              <li><a id="openModal">ログイン</a></li>
              <li>採用担当の方</li>
              <li>iOS/Androidアプリ</li>
              <li><img alt="Android" src="https://de7iszmjjjuya.cloudfront.net/assets/about/root/ic_android-fab51f2118632af06c1f9a1c3512755436bf892a38c27cf03832250ae70ea2d6.png"></li>
              <li><img alt="iOS" src="https://de7iszmjjjuya.cloudfront.net/assets/about/root/ic_ios-71ca2f3f21f29d3c391acf5423fb3ec3af9f984f1fc3aa2fa912abe221759e0b.png"></li>
          </ul>
      </nav>
  </header>

   @yield('content')

  <footer>
      <div class="footer-inner">
        <div class="footer-main">
          <div class="footer-logo-and-like">
            <img src="img/title.png">
            <div id=footerLogo>
              <div id="fb-root">
                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
              </div>
            </div>
          </div>
          <div class="inc">&copy; iidatakuya</div>
        </div>
      </div>
  </footer>

  <!-- モーダルウィンドウ start -->
  <section id="modalWindow" class="modal-window">
    <div id="modalBackground" class="modal-background"></div>
    <div class="modal-wrapper .shadow">
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
              <label for="login_user_email"><input autofocus="autofocus" placeholder="メールアドレス" type="email" name="email" id="login_user_email" /></label>
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
    <div id="closeModal" class="close-modal">
      ×
    </div>
  </section>
  <!-- モーダルウィンドウ start -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <script>
          // 背景画像の変更
      $(function(){
        $(window).on('load scroll resize', function(){
          // スクロール距離を取得
          let scrollTop = $(window).scrollTop();
          // 一番上から[sectionのmore-infoクラス]まで距離を取得
          let sectionMoreInfoHeight = $('.more-info').offset().top;
            // スクロールした距離が[sectionのmore-infoクラス]に近づいたらクラス[image]の追加
          if (scrollTop >= (sectionMoreInfoHeight-300)){
            $('#body').addClass('images');
          } else {
            $('#body').removeClass('images');
          }
        });

          //　モーダルウィンドウ
        $('#openModal').click(function(){
            $('#modalWindow').fadeIn();
        });
        $('#closeModal , #modalBackground').click(function(){
            $('#modalWindow').fadeOut();
        });
      });
  </script>
</body>

</html>
