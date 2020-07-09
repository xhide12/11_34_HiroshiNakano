<?php
require 'password.php';   // password_verfy()はphp 5.5.0以降の関数のため、バージョンが古くて使えない場合に使用

// セッション開始
session_start();

// ログイン状態チェック
require "functions.php";
loginCheck();

$pdo = connectDB();


?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ライブハウス大作戦～TOPページ～</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
      .livehouse{
        width:250px;
      }

      .jumbotron {
        background-image: url("img/top00.jpg");
        background-size: cover;
        background-position: center 60%;
      }

      .thumbnail {
        display: inline-block; /* ここがポイント */
        height: 300px;
        margin-right: 30px;
        margin-bottom: 15px;
      }

     .thumbnail img {
       height: 100%;
     }

     .img_wrapper{
       text-align: center;
     }

     .thumbnail_text {
        display: inline-block; /* ここがポイント */
        margin-right: 150px;
        margin-left: 50px;
        margin-bottom: 5px;
      }

     .text_wrapper{
       text-align: center;
       padding-top:15px;
     }

     .youser {
        padding-top:10px;
      }

      .sample-text1 {
      font-size: 20px;
      font-weight: bold;
      animation-name: fadein;
      animation-duration: 2s;
      }
      @keyframes fadein {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
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
        <div class="text-center bg-dark h-100 pt-4 pb-4 jumbotron">
            <p class="display-3 center-block text-white">ライブハウス大作戦</p>
            <p class="display-4 text-white">with コロナ</p>
        </div>
    </div>

<!-- Main[Start] -->

  <div class="sample-text1">
    <div class="text_wrapper">
        <strong><p class="thumbnail_text">　　　　　　グッズで支援</p></strong>
        <strong><p class="thumbnail_text">　　　　　　　　応援メッセージ　　　　</p></strong>
    </div>

    <div class="img_wrapper">
        <a class="thumbnail" href="https://xhide0.wixsite.com/livehouse-ec" target="_brank"><img src="img/livehouse01.jpg" alt=""></a>
        <a class="thumbnail" href="list.php" target="_self"><img src="img/livehouse02.jpg" alt=""></a>
    </div>
  </div>

  <div class="sample-text1">
    <div class="text_wrapper">
        <strong><p class="thumbnail_text">　　　　有志団体の支援プロジェクト</p></strong>
        <strong><p class="thumbnail_text">　ライブハウス個別の取り組み</p></strong>
    </div>

    <div class="img_wrapper">
        <a class="thumbnail" href="shien.php" target="_self"><img src="img/livehouse03.jpg" alt=""></a>
        <a class="thumbnail" href="livehouse.php" target="_self"><img src="img/livehouse04.jpg" alt=""></a>
    </div>
  </div>

   </body>
</html>