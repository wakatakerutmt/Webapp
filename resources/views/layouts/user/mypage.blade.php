<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Wantedly</title>
  <link rel="icon" href="">
  <meta name="description" content="wantedly風サイト">


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/user.css">
</head>


<body id="myBody">
  <header>
      <nav class="my-navigation">
          <ul>
              <li class="nav-title"><a id="a-design" href="/"><img src="img/shorttitle.svg" alt="wantedly"></a></li>
              <li>募集を見る</li>
              <li>フィードをみる</li>
              <li>プロフィール</li>
              <li>フィードをみる</li>
              <li>プロフィール</li>
              <li>ツール</li>
              <li><input class="search" type="text" placeholder="人や会社、募集を検索"></li>
              <li class="user"><img src="img/usericon.png"></li>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
</body>

</html>
