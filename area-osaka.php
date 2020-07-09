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
    <h2>大阪府</h2>
    <nav>
      <ul>
        <li class="link-text"><a href="#osaka1">心斎橋・なんば</a><span class="count"></span></li>
        <li class="link-text"><a href="#osaka2">梅田</a><span class="count"></span></li>
        <li class="link-text"><a href="#osaka3">その他エリア</a><span class="count"></span></li>
        <li class="link-text top"><a href="livehouse.php">都道府県一覧へ</a></li>
      </ul>
    </nav>
  </div>
</section>

<div id="livehouse-list">

  <section class="section-wrap" id="osaka1">
    <div class="inner-wrap">
      <h2>心斎橋・なんば</h2>
      <div class="clearfix">

<article class="article-wrap match-height box-shadow" id="E3-001"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-001.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>club JOULE</h3><div class="twitter"><a href="https://twitter.com/club_joule" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「DON'T STOP JOULE」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/257005" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-004"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-004.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>club vijon</h3><div class="twitter"><a href="https://twitter.com/clubvijon" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/user/botvijon/videos" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-005"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-005.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CONPASS</h3><div class="twitter"><a href="https://twitter.com/conpass1" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「【SAVE THE CONPASS】大阪コンパスの存続の為の支援プロジェクト」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/257609" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-008"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-008.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>Live House Pangea</h3><div class="twitter"><a href="https://twitter.com/Pangea_osaka" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UC9t1h2pciGIeDJg9p_JJQVQ" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ステッカー等を販売。</div><p class="price">550</p><div class="link-text"><a href="https://pangeaosaka.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-010"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-010.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>SHOVEL BIGTWIN DINER</h3><div class="twitter"><a href="https://twitter.com/live_BTD" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCElBjpEu5F5krcSVFREp7wQ" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-013"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-013.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>TRIANGLE</h3><div class="twitter"><a href="https://twitter.com/triangleosaka" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「【SAVE THE TRIANGLE】アメリカ村トライアングル存続支援のお願い」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/258724" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-014"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-014.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>アメリカ村 BEYOND</h3><div class="twitter"><a href="https://twitter.com/BEYOND_OSAKA" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はHPをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCLBbDN4e0Cy62N2ANw7GJqw" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-015"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-015.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>アメリカ村DROP</h3><div class="twitter"><a href="https://twitter.com/clubdrop" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はHPをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UC6vQ41LcOebgAkn89cEzA1w" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-019"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-019.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>心斎橋VARON</h3><div class="twitter"><a href="https://twitter.com/LIVEHOUSE_VARON" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">配信の詳しい情報はHPをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCNpfjp2IjbvDQc1KSrDLLtg" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-020"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-020.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>新神楽</h3><div class="twitter"><a href="https://twitter.com/wwp_sinkagura" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「SAVE THE SINKAGURA」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/258703" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-022"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-022.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>難波Mele</h3><div class="twitter"><a href="https://twitter.com/namba_mele" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/user/nambamele?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・ドリンクチケット・缶バッジ・サコッシュ・投げ銭チケットを販売。</div><p class="price">500</p><div class="link-text"><a href="https://nambamele.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-006"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-006.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>KING COBRA OSAKA</h3><div class="twitter"><a href="https://twitter.com/kingcobra_osaka" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツを販売。</div><p class="price">2,000</p><div class="link-text"><a href="http://king-cobra.net/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="osaka2">
    <div class="inner-wrap">
      <h2>梅田</h2>
      <div class="clearfix">

<article class="article-wrap match-height box-shadow new" id="E3-025"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-025.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>GANZ toi,toi,toi</h3><div class="twitter"><a href="https://twitter.com/ganz5515" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「GANZ toi，toi，toi存続資金支援プロジェクト」実施</div><p class="price">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/266219" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-003"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-003.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>CLUB PICCADILLY</h3><div class="twitter"><a href="https://twitter.com/clubpiccadilly" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「【SAVE PICCADILLY】あなたの力で最高のエンターテイメントを。」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/256035" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-011"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-011.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>Soap opera classics梅田</h3><div class="twitter"><a href="https://twitter.com/Soc_osaka" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「I Love Soc！再出発に向けて～お願いです！僕らにチカラを下さい！～」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/249775" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-023"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-023.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>梅田Shangri-La</h3><div class="twitter"><a href="https://twitter.com/umeda_ShangriLa" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「【SAVE THE Shangri-La】梅田シャングリラの存続の為の支援プロジェクト」実施。</div><p class="price">3,000</p><div class="link-text"><a href="https://wefan.jp/crowdfunding/projects/shangri-la2020" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-024"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-024.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>梅田Zeela</h3><div class="twitter"><a href="https://twitter.com/asoviva_zeela" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCX7R6lVLlwQxh3ARdCCoojQ" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

      </div>
    </div>
  </section>

  <section class="section-wrap" id="osaka3">
    <div class="inner-wrap">
      <h2>その他エリア</h2>
      <div class="clearfix">

<article class="article-wrap match-height box-shadow" id="E3-002"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-002.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>club MERCURY</h3><div class="twitter"><a href="https://twitter.com/club_MERCURY" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">アマチュアがアマチュアのカヴァーをして販売する』アーティストの相互活動支援プロジェクト。</div><p class="price">500</p><div class="link-text"><a href="https://club-mercury.stores.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://twitter.com/club_MERCURY/status/1254246922002432001?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-007"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-007.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>LIVE HOUSE Anima</h3><div class="twitter"><a href="https://twitter.com/Anima_osaka" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはステッカー・Tシャツ・栓抜きを販売。</div><p class="price">550</p><div class="link-text"><a href="https://pangeaosaka.thebase.in/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-012"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-012.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>TOYONAKA LIP2nd</h3><div class="twitter"><a href="https://twitter.com/TOYONAKA_LIP2nd" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「若者の夢を応援する、豊中のライブハウス「LIP2nd」を守りたい。」実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://motion-gallery.net/projects/toyonaka-lip2nd" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-016"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-016.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>ライブハウス都雅都雅</h3><div class="twitter"><a href="https://twitter.com/h2labo" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>クラウドファンディング</h4><div class="mb-1em">クラウドファンディング「京都　都雅都雅　支援プロジェクト」を実施。</div><p class="price">2,000</p><div class="link-text"><a href="https://camp-fire.jp/projects/view/265155" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-017"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-017.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>堺東Goith</h3><div class="twitter"><a href="https://twitter.com/sakai_Goith" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>動画配信</h4><div class="mb-1em">動画or配信の詳しい情報はURLをチェック。</div><p class="price off"></p><div class="link-text"><a href="https://www.youtube.com/channel/UCSp7oMTd3exTysva68GQD4w?app=desktop" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-018"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-018.jpg" alt="" loading="lazy"></div><section class="project-01"><h3>寺田町Fireloop</h3><div class="twitter"><a href="https://twitter.com/Fireloop_info" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはTシャツ・投げ銭チケット・音源を販売。</div><p class="price">500</p><div class="link-text"><a href="https://nantokalabo.theshop.jp/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4></h4><div class="mb-1em"></div><p class="price"></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

<article class="article-wrap match-height box-shadow" id="E3-021"><div class="image"><img src="https://eplus.jp/s/page/live/livehouse_support/images/livehouse-osaka/E3-021.jpg" alt="" loading="lazy"></div><section class="project-02"><h3>大阪 COCHLEA.</h3><div class="twitter"><a href="https://twitter.com/CLUB_COCHLEA" target="twitter"><img src="images/icon_twitter.svg" alt=""></a></div><div class="content-wrap no1"><h4>物販</h4><div class="mb-1em">グッズはドリンクチケット・ステッカー 等を販売。</div><p class="price">500</p><div class="link-text"><a href="https://dtb.base.shop/" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no2"><h4>その他</h4><div class="mb-1em">1円からできる寄付を開始。</div><p class="price">1</p><div class="link-text"><a href="https://twitter.com/daytrip_nagoya/status/1248108904426262529?s=20" target="_blank">詳細はこちら</a></div></div><div class="content-wrap no3"><h4></h4><div class="mb-1em"></div><p class="price "></p><div class="link-text"><a href="" target="_blank">詳細はこちら</a></div></div></section><div class="date"></div></article>

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
      <li><strong>大阪府</strong></li>
    </ul>
    <div class="eplus"><a href="https://eplus.jp/" target="eplus"><img src="https://eplus.jp/s/page/live/images/logo_eplus.png" alt="イープラス"></a></div>
    <p>Copyright eplus inc. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>