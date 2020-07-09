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
    <h2>東京都(その他)</h2>
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
      <h2>その他エリア</h2>
      <div class="clearfix">

        <!-- <div id="list"></div> -->

<article class="article-wrap match-height box-shadow new" id="B6-047"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-047.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Live & BAR Nutty’s</h3><div class="twitter "><a href="https://twitter.com/Nutty_s" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドリンクチケット・クージー等を販売。</div><p class="price ">1,000</p><div class="link-text"><a href="https://liveandbarnuttys.stores.jp/" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.22</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-094"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-094.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>Club Heavy Sick</h3><div class="twitter off"><a href="*Twitter*" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ、バッグ、缶バッチ、ドリンクチケットなど</div><p class="price ">500</p><div class="link-text"><a href="https://heavysick.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">*金額2*</p><div class="link-text"><a href="https://www.youtube.com/channel/UCTwr-BpqfkSGS59IUcfmLHg" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.19</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-092"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-092.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>heavysick ZERO</h3><div class="twitter"><a href="https://twitter.com/heavysickZERO" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price off"></p><div class="link-text"><a href="https://heavysickzero.stores.jp/" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B6-088"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-088.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>新高円寺カナデミア</h3><div class="twitter off"><a href="https://twitter.com/*TwitterID*" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「コロナに負けたくない！新高円寺カナデミア再生プロジェクト！！」実施。</div><p class="price">500</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/259327" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B6-087"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-087.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>上野音横丁</h3><div class="twitter"><a href="https://twitter.com/ueno_otoyoko" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">無観客LIVE＆配信サポートをパッケージにてサービス開始。 無観客ライブをしたいがノウハウがない、機材がない、そんな悩みを一気に解消。</div><p class="price off1"></p><div class="link-text"><a href="https://go-live.jp/pdf/livego.pdf" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow new" id="B6-067"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-067.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>赤坂CLUB TENJIKU</h3><div class="twitter "><a href="https://twitter.com/clubtenjiku" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドリンクチケット 等を販売。</div><p class="price ">500</p><div class="link-text"><a href="https://niino.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UC_Kl3gruYizn571Q5r8fhcw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.7</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-076"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-076.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>両国SUNRIZE</h3><div class="twitter "><a href="https://twitter.com/ryougokusunrize" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドンペリ・CD・ドリンクチケット等を販売。</div><p class="price ">500</p><div class="link-text"><a href="https://niino.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UC_Kl3gruYizn571Q5r8fhcw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.7</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-049"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-049.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>町田ThePlayHouse</h3><div class="twitter "><a href="https://twitter.com/the_play_house" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「◆町田ThePlayHouse存続プロジェクト◆」実施。</div><p class="price ">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/256853" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.7</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-075"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-075.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>立川BABEL</h3><div class="twitter "><a href="https://twitter.com/TachikawaBABEL" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UC7l2gV-xr1m64wRzywDIKbg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・Tシャツ・トートバッグを販売。</div><p class="price ">600</p><div class="link-text"><a href="https://babelbase.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.7</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-045"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-045.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Asakusa Gold Sounds</h3><div class="twitter "><a href="https://twitter.com/GoldSounds1" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ、配信ライブへの投げ銭などを販売。</div><p class="price ">500</p><div class="link-text"><a href="https://goldsounds.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.7</div></article>

<article class="article-wrap match-height box-shadow new" id="B6-052"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-052.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>あさがやドラム</h3><div class="twitter "><a href="https://twitter.com/asagayadrum" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケットを販売。</div><p class="price ">7,000</p><div class="link-text"><a href="https://asagaya-drum.com/2020kanpai/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.7</div></article>


<article class="article-wrap match-height box-shadow" id="B6-044"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-044.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>THE LIVE STATION</h3><div class="twitter "><a href="https://twitter.com/megurolivest" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「Reboot the Meguro LIVE STATION」実施。</div><p class="price ">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/253669" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-046"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-046.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CLUB GOODMAN</h3><div class="twitter "><a href="https://twitter.com/clubgoodman" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UC_QzzUeMvSprPIlKvFEnXRA?sub_confirmation=1" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-047"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-047.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Live & BAR Nutty’s</h3><div class="twitter "><a href="https://twitter.com/Nutty_s" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://youtu.be/A0vxJROIkDE" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-048"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-048.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE＆PUB MOON STEP</h3><div class="twitter "><a href="https://twitter.com/naokimoonstep" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・手拭い等を販売。</div><p class="price ">500</p><div class="link-text"><a href="https://note.com/moonstepproject/n/n9971e6dc9452" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-050"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-050.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>U.F.O.CLUB</h3><div class="twitter "><a href="https://twitter.com/UFO_CLUB_TOKYO" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・CDを販売。</div><p class="price ">1,500</p><div class="link-text"><a href="https://ufoclubshop.official.ec/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズは雑貨・アパレルなどを販売。</div><p class="price ">2,350</p><div class="link-text"><a href="https://suzuri.jp/ufoclub_tokyo" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-051"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-051.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>VENT</h3><div class="twitter "><a href="https://twitter.com/vent_tokyo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「世界のTOPアーティストがプレイする日本の小さな名店 VENT 支援プロジェクト」実施。</div><p class="price ">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/253787" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-059"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-059.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>三軒茶屋GRAPEFRUIT MOON</h3><div class="twitter "><a href="https://twitter.com/GrapefruitInfo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「STORE on the MOON」実施。</div><p class="price ">1,000</p><div class="link-text"><a href="https://grape-fruit-moon.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-060"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-060.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>四谷Outbreak!</h3><div class="twitter "><a href="https://twitter.com/428outbreak" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCl3N10_0XAzgNA2m08UYvRQ" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-061"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-061.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>四谷天窓</h3><div class="twitter "><a href="https://twitter.com/yotsuya_tenmado" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">配信の詳しい情報はHPをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://twitcasting.tv/yotsuya_tenmado" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-062"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-062.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>秋葉原ディアステージ</h3><div class="twitter "><a href="https://twitter.com/DearStage" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">お弁当（事前予約・店頭受け取り）・ドリンクチケット・CD・Tシャツ等 を販売。</div><p class="price ">886</p><div class="link-text"><a href="http://dearstage.com/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-064"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-064.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>星屑と三日月</h3><div class="twitter "><a href="https://twitter.com/hkztomdk" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>その他</h4><div class="mb-1em">フードメニューのテイクアウトを実施。</div><p class="price ">700</p><div class="link-text"><a href="https://twitter.com/hkztomdk/status/1251707508688687107?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-065"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-065.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>晴れたら空に豆まいて</h3><div class="twitter "><a href="https://twitter.com/haremame" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング【代官山 晴れたら空に豆まいての「存続」と「事業継続」のための緊急支援プロジェクト】実施。</div><p class="price ">2,000</p><div class="link-text"><a href="https://motion-gallery.net/projects/haremame" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-066"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-066.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>西永福JAM</h3><div class="twitter "><a href="https://twitter.com/nishieifukuJAM" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCMnj4sEb5QbN8QIpI8-yyFA" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドリンクチケット 等を販売。</div><p class="price ">2,500</p><div class="link-text"><a href="https://rinkylive.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-068"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-068.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>代官山NOMAD</h3><div class="twitter "><a href="https://twitter.com/dy_nomad" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケットを販売。</div><p class="price ">2,500</p><div class="link-text"><a href="https://higenomad.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-069"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-069.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>代官山UNIT</h3><div class="twitter "><a href="https://twitter.com/UNIT_daikanyama" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「UNIT主催支援プロジェクト」実施。</div><p class="price ">3,000</p><div class="link-text"><a href="https://readyfor.jp/projects/unit?utm_source=pj_share_twitter&utm_medium=social" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCSoE9vhXFg11Gjw0waTW-KQ" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-070"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-070.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>町田まほろ座</h3><div class="twitter "><a href="https://twitter.com/mahoroza" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCgN5m2Dk4CfdMPfDLIKtUPw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-078"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-078.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>町田CLASSIX</h3><div class="twitter "><a href="https://twitter.com/MACHIDA_CLASSIX" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドリンク券を販売。</div><p class="price ">1,200</p><div class="link-text"><a href="https://classix.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-071"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-071.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>調布Cross</h3><div class="twitter "><a href="https://twitter.com/ChofuCross" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・トートバック・スマホケースを販売。</div><p class="price ">2,000</p><div class="link-text"><a href="https://store.toos.co.jp/collections/cross" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-072"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-072.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>東高円寺二万電圧</h3><div class="twitter "><a href="https://twitter.com/hk20000v" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズは投げ銭おひねりチップを販売。</div><p class="price ">500</p><div class="link-text"><a href="https://hk20000v.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-073"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-073.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>八王子Match Vox</h3><div class="twitter "><a href="https://twitter.com/MatchVox" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ステッカー・ドリンクチケットを販売。</div><p class="price ">1,200</p><div class="link-text"><a href="https://rinkylive.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UChPwk6tzdb3RwY6dlgQtS5w" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-074"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-074.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>八王子RIPS</h3><div class="twitter "><a href="https://twitter.com/hachiojiRIPS" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ステッカー・ドリンクチケットを販売。</div><p class="price ">1,200</p><div class="link-text"><a href="https://rinkylive.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCMbn8lo3ciFcow-QLrnZIwg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

<article class="article-wrap match-height box-shadow" id="B6-077"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-tokyo/B6-077.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>六本木VARIT</h3><div class="twitter "><a href="https://twitter.com/InfoVarit" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off">0</p><div class="link-text"><a href="https://www.youtube.com/channel/UCgeM87IOTBICLMYZJHfMqDg/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date">2020.5.1</div></article>

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
      <li><strong>東京都 その他</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>