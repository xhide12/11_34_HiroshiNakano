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
    <h2>東京都(渋谷)</h2>
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
      <h2>渋谷</h2>
      <div class="clearfix">
        <!-- <div id="list"></div> -->

<article class="article-wrap match-height box-shadow new" id="B6-079"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-079.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>渋谷THE GAME</h3><div class="twitter "><a href="https://twitter.com/SHIBUYATHEGAME" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング【Not GAME OVER】を実施（7/15まで）。リターンはドリンクチケットやTシャツなど。</div><p class="price ">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/281411" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.26</div></article>

<article class="article-wrap match-height box-shadow" id="B6-085"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-085.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>SHIBUYA TAKE OFF 7</h3><div class="twitter "><a href="https://twitter.com/shibuyaTAKEOFF7" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「SAVETHE TAKE OFF7　TAKE OFF7を潰さない」実施。</div><p class="price ">2000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/271234" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow" id="B6-090"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-090.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>clubasia</h3><div class="twitter "><a href="https://twitter.com/clubasia_tokyo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「KEEP clubasia CONTINUE PARTY」を実施</div><p class="price ">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/268762" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow" id="B6-017"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-017.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>CLUB CRAWL</h3><div class="twitter "><a href="https://twitter.com/CRAWL_TWEET" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCU5XR_0jXw6ZgIVqX7RYIhg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズは投げ銭・Tシャツ・薄手パーカー・ロンTを販売。</div><p class="price ">500</p><div class="link-text"><a href="https://clubcrawl.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-018"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-018.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>DESEO mini</h3><div class="twitter "><a href="https://twitter.com/DESEOmini" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはステッカー&バックステージパス・Tシャツ・ドリンクチケットを販売。</div><p class="price ">1,000</p><div class="link-text"><a href="https://shibuyadeseo.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-024"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-024.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>SHIBUYA DESEO</h3><div class="twitter "><a href="https://twitter.com/SHIBUYADESEO" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはステッカー&バックステージパス・Tシャツ・ドリンクチケットを販売。</div><p class="price ">1,000</p><div class="link-text"><a href="https://shibuyadeseo.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-019"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-019.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>EBISU BATICA</h3><div class="twitter "><a href="https://twitter.com/BaticaEbisu" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price ">3,000</p><div class="link-text"><a href="https://solfastore.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-020"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-020.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>GUILTY</h3><div class="twitter "><a href="https://twitter.com/LiveStageGUILTY" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price ">3,300</p><div class="link-text"><a href="https://kyorakuya.thebase.in/items/28083526" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">「VELONICAL MODE」 ワンマンライブ映像データ/デジタルフォトブック販売。</div><p class="price ">1,200</p><div class="link-text"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdUkhob9VrZL5a2BFOND933hfLlI3OsuUQy-D-zkTnVWjP9Hg/viewform" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-021"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-021.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIQUIDROOM</h3><div class="twitter "><a href="https://twitter.com/LIQUIDROOM" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・サコッシュ・ロングスリーブ・FACE タオル・手ぬぐいを販売。</div><p class="price ">500</p><div class="link-text"><a href="http://liquidroom.shop-pro.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-022"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-022.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>R LOUNGE</h3><div class="twitter "><a href="https://twitter.com/RLounge_" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「【SAVE THE R LOUNGE】 R LOUNGE緊急支援プロジェクト」実施。</div><p class="price ">1,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/260898" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-023"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-023.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>RUBY ROOM</h3><div class="twitter "><a href="https://twitter.com/RUBYROOMshibuya" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「RUBY ROOM存続支援 ~KEEP THE BEAT~」実施。</div><p class="price ">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/254935/preview?token=r4e4atsy" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-025"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-025.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Zher the ZOO YOYOGI</h3><div class="twitter "><a href="https://twitter.com/ZtZYOYOGI" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「代々木ライブハウス救済プロジェクト」実施。</div><p class="price ">2,500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/256767" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-026"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-026.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>月見ル君想フ</h3><div class="twitter "><a href="https://twitter.com/moonromantic" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.moonromantic-channel.com/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-027"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-027.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>渋谷HOME</h3><div class="twitter "><a href="https://twitter.com/shibuya_HOME" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">キーホルダー・トートバッグ・Tシャツ 等を販売。</div><p class="price ">1,200</p><div class="link-text"><a href="https://store.toos.co.jp/collections/home" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCUnrOVswLKOtDeP-jc1EywQ" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-028"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-028.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>渋谷La.mama</h3><div class="twitter "><a href="https://twitter.com/shibuya_lamama2" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/user/shibuyalamama/videos?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">ステッカー・ラババン・缶バッジ・Tシャツを販売。</div><p class="price ">100</p><div class="link-text"><a href="https://shibuya-lamama.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-029"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-029.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>渋谷LUSH</h3><div class="twitter "><a href="https://twitter.com/shibuyaLush" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">クージー・ポーチ・Tシャツ を販売。</div><p class="price ">1,100</p><div class="link-text"><a href="https://store.toos.co.jp/collections/lush" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/watch?v=ipqFRo2Zd_U&feature=youtu.be" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-030"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-030.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>渋谷ジージ</h3><div class="twitter "><a href="https://twitter.com/shibuyageege" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://twitcasting.tv/shibuyageege/movie/609710015" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

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
      <li><strong>東京都 渋谷</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>