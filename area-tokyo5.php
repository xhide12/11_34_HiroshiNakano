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

<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@900&display=swap" rel="stylesheet">
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
      .jumbotron {
        background-image: url("img/top00.jpg");
        background-size: cover;
        background-position: center 60%;
      }

      .youser {
        padding-top:10px;
      }

      .youser01 {
        padding-top:50px;
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

<div id="livehouse">

<div class="container text-center mt-5">
        <!-- <div class="text-center bg-dark h-100 pt-4 pb-4 jumbotron jumbotron-extend">
            <p class="display-3 center-block text-white">ライブハウス大作戦</p>
            <p class="display-4 text-white">with コロナ</p>
        </div> -->
<img src="img/top.jpg" alt="">

</div>

<div class="container youser01">

<section class="section-wrap" id="area-top">
  <div class="inner-wrap">
    <h2>東京都(その他エリア)</h2>
    <nav>
      <ul>
        <li class="link-text"><a href="area-tokyo1.php">下北沢</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo2.php">渋谷</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo3.php">新宿</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo4.php">池袋</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo5.php">吉祥寺</a><span class="count"></span></li>
        <li class="link-text"><a href="area-tokyo6.php">その他エリア</a><span class="count"></span></li>
        <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap">
    <div class="inner-wrap">
      <h2>吉祥寺</h2>
      <div class="clearfix">

        <!-- <div id="list"></div> -->

<article class="article-wrap match-height box-shadow new" id="B6-089"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-089.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>NEPO</h3><div class="twitter"><a href="https://twitter.com/nepo_kichijoji" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはコンピレーションアルバム"Fourth Place" 5枚組CD-R + Tシャツセット、塩キャラメルテリーヌ、音楽機材ケーキなど販売。</div><p class="price"></p><div class="link-text"><a href="https://kilk.official.ec/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="B6-054"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-054.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>吉祥寺CLUB SEATA</h3><div class="twitter "><a href="https://twitter.com/CLUB_SEATA" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCjkTSzqbJXec7lbIK_AqzWg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-055"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-055.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>吉祥寺Planet K</h3><div class="twitter "><a href="https://twitter.com/kichijoji_pk" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCOS3xxupg5h-w67_tvxfJmA/featured" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-056"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-056.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>吉祥寺SHUFFLE</h3><div class="twitter "><a href="https://twitter.com/K_SHUFFLE" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCOCgld8ettkS5WFBKynBXVA" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはラバーバンド・キーホルダー・ドリンクチケット・Tシャツを販売。</div><p class="price ">500</p><div class="link-text"><a href="https://shuffle.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-057"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-057.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>吉祥寺WARP</h3><div class="twitter "><a href="https://twitter.com/warp123" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCnUf6OERRiy043tuNUnu4Yw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・Tシャツを販売。</div><p class="price ">2,500</p><div class="link-text"><a href="https://rinkylive.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-058"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-058.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>吉祥寺シルバーエレファント</h3><div class="twitter "><a href="https://twitter.com/silver_elephant" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.silver-elephant.com/twitcasting.html" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

      </div>
    </div>
  </section>

  <div id="clone"></div>

</div>

<div class="link-button"><a href="post.html">掲載希望はこちら</a></div>
<div class="page_top"><a href="#top" class="square">ページTOP</a></div>

<footer class="section-wrap" id="footer">
  <div class="inner-wrap">
    <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="https://eplus.jp/" itemprop="item"><span itemprop="name">TOP</span><meta itemprop="position" content="1"></a></li>
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="https://eplus.jp/sf/live" itemprop="item"><span itemprop="name">ライブ・コンサート</span><meta itemprop="position" content="2"></a></li>
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="https://eplus.jp/sf/live/livehouse_support" itemprop="item"><span itemprop="name">ライブハウス支援まとめ</span><meta itemprop="position" content="3"></a></li>
      <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a href="livehouse.html" itemprop="item"><span itemprop="name">ライブハウス個別の取り組み</span><meta itemprop="position" content="4"></a></li>
      <li><strong>東京都 吉祥寺</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>