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
    <h2>九州・沖縄</h2>
    <nav>
      <ul>
          <li class="link-text"><a href="#G1">福岡県</a><span class="count"></span></li>
          <li class="link-text"><a href="#G2" class="link-off">佐賀県</a><span class="count"></span></li>
          <li class="link-text"><a href="#G3" class="link-off">長崎県</a><span class="count"></span></li>
          <li class="link-text"><a href="#G4">熊本県</a><span class="count"></span></li>
          <li class="link-text"><a href="#G5">大分県</a><span class="count"></span></li>
          <li class="link-text"><a href="#G6" class="link-off">宮崎県</a><span class="count"></span></li>
          <li class="link-text"><a href="#G7">鹿児島県</a><span class="count"></span></li>
          <li class="link-text"><a href="#G8">沖縄県</a><span class="count"></span></li>
          <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap" id="G1">
    <div class="inner-wrap">
      <h2>福岡県</h2>
      <div class="clearfix" id="list-G1">

<article class="article-wrap match-height box-shadow" id="G1-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G1-005.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Cheerz</h3><div class="twitter off"><a href="https://twitter.com/*TwitterID*" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「SAVE THE Cheerz!!」を実施</div><p class="price">1,500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/261647" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="G1-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G1-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>graf</h3><div class="twitter"><a href="https://twitter.com/fukuoka_graf" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「ライブハウス・クラブgraf支援プロジェクト」を実施。</div><p class="price">1,500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/256357" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="G1-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G1-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Early Believers</h3><div class="twitter"><a href="https://twitter.com/EarlyBelievers" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">2,500</p><div class="link-text"><a href="https://twitter.com/EarlyBelievers/status/1247494358326112257" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="G1-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G1-002.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>Queblick</h3><div class="twitter"><a href="https://twitter.com/queblick" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・キーホルダー等を販売。</div><p class="price">1,100</p><div class="link-text"><a href="https://queblick.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCjNOwAPO11YSnuUG99J0UKg?view_as=subscriber" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="G1-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G1-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブハウス マーカス</h3><div class="twitter"><a href="https://twitter.com/KurosakiMARCUS" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「SAVE the LIVE HOUSE MARCUS」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/262076" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="G2">
    <div class="inner-wrap">
      <h2>佐賀県</h2>
      <div class="clearfix" id="list-G2">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="G3">
    <div class="inner-wrap">
      <h2>長崎県</h2>
      <div class="clearfix" id="list-G3">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="G4">
    <div class="inner-wrap">
      <h2>熊本県</h2>
      <div class="clearfix" id="list-G4">

<article class="article-wrap match-height box-shadow" id="G4-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G4-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>NAVARO</h3><div class="twitter"><a href="https://twitter.com/NAVARO_" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">デジタルアルバムをストリーミングダウンロードで販売。</div><p class="price">1,500</p><div class="link-text"><a href="https://navarokumamoto.bandcamp.com/releases" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="G5">
    <div class="inner-wrap">
      <h2>大分県</h2>
      <div class="clearfix" id="list-G5">

<article class="article-wrap match-height box-shadow" id="G5-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G5-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>T.O.P.S BittsHALL / clubSPOT / to-PLUS</h3><div class="twitter" target="twitter"><a href="https://twitter.com/tops_inc" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・タオル等を販売。</div><p class="price">1,500</p><div class="link-text"><a href="https://tops.buyshop.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="G6">
    <div class="inner-wrap">
      <h2>宮崎県</h2>
      <div class="clearfix" id="list-G6">

      </div>
    </div>
  </section>

  <section class="section-wrap" id="G7">
    <div class="inner-wrap">
      <h2>鹿児島県</h2>
      <div class="clearfix" id="list-G7">

<article class="article-wrap match-height box-shadow" id="G7-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G7-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Speed King</h3><div class="twitter"><a href="https://twitter.com/speedkingstudio" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズは疫病退散祈願Tシャツ・Speed King since 1998 ステッカーを販売。</div><p class="price">500</p><div class="link-text"><a href="https://www.spikin.com/merch/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="G8">
    <div class="inner-wrap">
      <h2>沖縄県</h2>
      <div class="clearfix" id="list-G8">

<article class="article-wrap match-height box-shadow" id="G8-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G8-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>沖縄Output</h3><div class="twitter"><a href="https://twitter.com/output___" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCIOXRhMEU4015RFFdOSDhjw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="G8-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-g/G8-002.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>宜野湾 HUMAN STAGE</h3><div class="twitter"><a href="https://twitter.com/HumanStage" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCkGHTZ4duRmOcwclouDiDKg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

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
      <li><strong>九州・沖縄</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>