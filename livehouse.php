<?php
require 'password.php';   // password_verfy()はphp 5.5.0以降の関数のため、バージョンが古くて使えない場合に使用

// セッション開始
session_start();

// ログイン状態チェック
require "functions.php";
loginCheck();

$pdo = connectDB();


?>

<!DOCTYPE html>
<html lang="ja">
<head  prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<meta charset="UTF-8">
<title>ライブハウス大作戦～ライブハウスの取り組み～</title>

<meta content="app-id=465887673" name="apple-itunes-app">
<meta property="fb:app_id" content="465887673">
<link rel="apple-touch-icon" href="https://eplus.jp/s/eplus/img/webclip.png">

<link rel="stylesheet" type="text/css" href="https://eplus.jp/s/page/live/livehouse_support/data/css/style.css">
<script src="https://eplus.jp/s/page/live/js/jquery-3.1.1.min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery-migrate-1.4.1.min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.easing.1.3.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.colorbox-min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.inview.min.js"></script>
<script src="https://eplus.jp/s/page/live/js/jquery.matchHeight.js"></script>
<script src="https://eplus.jp/s/eplus/js/jquery.cookie.js"></script>
<script src="https://eplus.jp/s/eplus/js/cloud.js"></script>
<script src="https://eplus.jp/s/eplus/js/ui.js"></script>
<script src="https://eplus.jp/s/page/live/livehouse_support/data/js/script.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
      .youser {
        padding-top:10px;
      }

      .yushi{
        margin-top:30px;
        text-align:center;
      }

    </style>

</head>
<body style="padding-top:3rem;">

<nav class="navbar navbar-dark bg-dark text-white fixed-top">
      <div class="container youser">
      <!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
          <strong><p>ようこそ <u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u> さん</p></strong>  <!-- ユーザー名をechoで表示 -->
          <strong><p>ログアウトは<a href="Logout.php">こちら</a>から</p></strong>
      </div>
  </nav>



<div class="container text-center mt-5">
        <!-- <div class="text-center bg-dark h-100 pt-4 pb-4 jumbotron jumbotron-extend">
            <p class="display-3 center-block text-white">ライブハウス大作戦</p>
            <p class="display-4 text-white">with コロナ</p>
        </div> -->
    <a href="top.php"><img src="img/top.jpg" alt=""></a>
</div>

<strong><h2 class="yushi">ライブハウス個別の取り組み</h2></strong>

<div class="container youser01">
<div id="livehouse">
<section class="section-wrap" id="search">
  <div class="inner-wrap fromBottom">
    <div class="box-shadow search-box">
      <h2><span>地域から探す</span></h2>
      <nav>
        <dl class="list">
          <dt class="link-text"><div class="left-box"><a href="area-a.php">北海道・東北</a><span class="count">14</span></div><div class="right-box"><button></button></div></dt>
          <dd><ul>
            <li class="link-text"><a href="area-a.php#A1">北海道</a><span class="count">5</span></li>
            <li class="link-text"><a href="area-a.php#A2">青森県</a><span class="count">0</span></li>
            <li class="link-text"><a href="area-a.php#A3">岩手県</a><span class="count">1</span></li>
            <li class="link-text"><a href="area-a.php#A4">宮城県</a><span class="count">3</span></li>
            <li class="link-text"><a href="area-a.php#A5" class="link-off">秋田県</a><span class="count">0</span></li>
            <li class="link-text"><a href="area-a.php#A6">山形県</a><span class="count">2</span></li>
            <li class="link-text"><a href="area-a.php#A7">福島県</a><span class="count">3</span></li>
          </ul></dd>
        </dl>
        <dl class="list">
          <dt class="link-text"><div class="left-box"><a href="area-b.php">関東</a><span class="count"></span></div><div class="right-box"><button></button></div></dt>
          <dd><ul>
            <li class="link-text"><a href="area-b.php#B1">茨城県</a><span class="count">2</span></li>
            <li class="link-text"><a href="area-b.php#B2">栃木県</a><span class="count">1</span></li>
            <li class="link-text"><a href="area-b.php#B3">群馬県</a><span class="count">1</span></li>
            <li class="link-text"><a href="area-b.php#B4">埼玉県</a><span class="count">2</span></li>
            <li class="link-text"><a href="area-b.php#B5">千葉県</a><span class="count">7</span></li>
            <li class="link-text"><a href="area-tokyo1.php">東京都</a><span class="count"></span></li>
            <li class="link-text"><a href="area-b.php#B7">神奈川県</a><span class="count">5</span></li>
            <li class="link-text"><a href="area-b.php#C5" class="link-off">山梨県</a><span class="count">0</span></li>
          </ul></dd>
        </dl>
        <dl class="list">
          <dt class="link-text"><div class="left-box"><a href="area-c.php">北信越・東海</a><span class="count"></span></div><div class="right-box"><button></button></div></dt>
          <dd><ul>
            <li class="link-text"><a href="area-c.php#C1">新潟県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#C2" class="link-off">富山県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#C3">石川県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#C4" class="link-off">福井県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#C6">長野県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#D1">岐阜県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#D2">静岡県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#D3">愛知県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-c.php#D4">三重県</a><span class="count"></span></li>
          </ul></dd>
        </dl>
        <dl class="list">
          <dt class="link-text"><div class="left-box"><a href="area-e.php">関西</a><span class="count"></span></div><div class="right-box"><button></button></div></dt>
          <dd><ul>
            <li class="link-text"><a href="area-e.php#E1" class="link-off">滋賀県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-e.php#E2">京都府</a><span class="count"></span></li>
            <li class="link-text"><a href="area-osaka.php">大阪府</a><span class="count"></span></li>
            <li class="link-text"><a href="area-e.php#E4">兵庫県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-e.php#E5">奈良県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-e.php#E6">和歌山県</a><span class="count"></span></li>
          </ul></dd>
        </dl>
        <dl class="list">
          <dt class="link-text"><div class="left-box"><a href="area-f.php">中国・四国</a><span class="count"></span></div><div class="right-box"><button></button></div></dt>
          <dd><ul>
            <li class="link-text"><a href="area-f.php#F1" class="link-off">鳥取県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F2">島根県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F3">岡山県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F4">広島県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F5">山口県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F6" class="link-off">徳島県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F7">香川県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F8">愛媛県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-f.php#F9">高知県</a><span class="count"></span></li>
          </ul></dd>
        </dl>
        <dl class="list">
          <dt class="link-text"><div class="left-box"><a href="area-g.php">九州・沖縄</a><span class="count"></span></div><div class="right-box"><button></button></div></dt>
          <dd><ul>
            <li class="link-text"><a href="area-g.php#G1">福岡県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-g.php#G2" class="link-off">佐賀県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-g.php#G3" class="link-off">長崎県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-g.php#G4">熊本県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-g.php#G5">大分県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-g.php#G6" class="link-off">宮崎県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-g.php#G7">鹿児島県</a><span class="count"></span></li>
            <li class="link-text"><a href="area-g.php#G8">沖縄県</a><span class="count"></span></li>
          </ul></dd>
        </dl>
      </nav>
    </div>
  </div>
</section>

<!-- <div class="link-button"><a href="post.html" target="">掲載希望はこちら</a></div> -->

</div>
</div>
<div class="page_top"><a href="#top" class="square">ページTOP</a></div>



</body>
</html>