<?php
require_once("../php/init.php");
$this_page="";
$sub_page="";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="copyright" content="">
  <meta name="author" content="">
  <meta name="Targeted Geographic Area" content="Japan">
  <meta name="coverage" content="Japan">
  <meta name="rating" content="general">
  <meta name="content-language" content="ja">
  <meta name="format-detection" content="telephone=no">
  <link rel="canonical" href="">

  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:description" content="">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@">
  <meta name="twitter:image" content="">

  <!-- build:css assets/css/vender.min.css -->
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <!-- endbuild -->

  <link rel="stylesheet" href="assets/css/common.min.css">
</head>

<body>
  <!-- Contact -->
  <div class="contact">
    <!-- wrapper -->
    <div id="wrapper">

      <!-- innerWrapper -->
      <div id="innerWrapper">
        <!-- header -->
        <?php require_once("../php/layouts/contents_header.php"); ?>
        <!-- /header -->
        <!-- <h1 class="testing spOnly">contact</h1> -->
        <div class="contactCover pcOnly">
          <img src="../assets/img/contact/contact_cover.png">
        </div>
        <div class="coverContact spOnly">
          <h1 class="overText">contact</h1>
        </div>
        <h1 class="spOnly contactTitleText">お問い合わせフォーム</h1>
        <div class="underHeaderText">
          <p>CLUDE LABのウェブサイトをご覧いただきましてありがとうございます。
            <span>
             お仕事のご相談、製品に関するご質問、その他に関するお問い合わせは、
           </span>
           以下の送信フォームをご利用ください。
         </p>
         <p>
           ※電話番号・E-mailなどは、半角英数字で入力してください。<br>
           ※半角カナは使用しないでください。 

         </p>
       </div>

       <div class="contactFormBox">
        <div class="formBoxContainer">
          <!-- upper -->
          <div class="upper">
            <div class="formBox one">
              <h3>会社名</h3>
              <input type="text" name="" class="inputForm">
            </div>
            <div class="formBox two">
              <h3>お名前</h3>
              <input type="text" name="" class="inputForm">
            </div>
            <div class="formBox three">
              <h3>メールアドレス</h3>
              <input type="text" name="" class="inputForm">
            </div>
            <div class="formBox four">
              <h3>電話番号</h3>
              <input type="text" name="" class="inputForm">
            </div>
          </div>
          <!-- Middle -->
          <div class="middleContainer">
            <!-- <div class="middleOne">
              <h1>
                業務に関する選択
              </h1>
              <div class="radioBox">
                  <div class="radio">
                    <input type="radio" name="radio">
                    <span class="checkmark">お仕事のご相談</span>
                  </div>
                  <div class="radio">
                    <input type="radio" name="radio">
                    <span class="checkmark">製品に関するご質問</span>
                  </div>
                  <div class="radio">
                    <input type="radio" name="radio">
                    <span class="checkmark">材料物性を入手</span>
                  </div>
                  <div class="radio">
                    <input type="radio" name="radio">
                    <span class="checkmark">その他</span>
                  </div>
              </div>
            </div>   -->
            <div class="extention">
              <div class="titleText">
                 <h1>業務に関する選択（複数選択可）</h1>
              </div>
              <div class="checkBoxContainer">
                  <label class="container">お仕事のご相談
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                  </label>
                  <label class="container">製品に関するご質問
                      <input type="checkbox">
                      <span class="checkmark"></span>
                  </label>
                  <label class="container">材料物性資料を入手
                      <input type="checkbox" class="checkTest">
                      <span class="checkmark"></span>
                  </label>
                  <label class="container">その他
                      <input type="checkbox">
                      <span class="checkmark"></span>
                  </label>
              </div>
            </div>
            <div class="clickShowCheckBox">
              <div class="titleText">
                 <h1>材料を選択</h1>
                  <span>（複数選択可）</span>
              </div>
              <div class="checkBoxContainer">
                  <label class="container">PEEK
                      <input type="checkbox" checked="checked" class="myCheck">
                      <span class="checkmark"></span>
                  </label>
                  <label class="container">MXD6
                      <input type="checkbox" class="myCheck">
                      <span class="checkmark"></span>
                  </label>
                  <label class="container">PC
                      <input type="checkbox" class="myCheck">
                      <span class="checkmark"></span>
                  </label>
                  <label class="container">全て
                      <input type="checkbox" class="myCheck">
                      <span class="checkmark"></span>
                  </label>
              </div>
            </div>
            <div class="middleTwo">
              <div>
                <h1>お問い合わせ内容</h1>
                <textarea></textarea>
              </div>
            </div>
            <div class="middleThree">
              <h1>個人情報の取り扱いについて</h1>
              <div>
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </div>
            </div>
            <div class="last">
              <label class="container">利用規約に同意する
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <div class="btn">
                  <div>送　　信</div>
                  <div>クリア</div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- footer -->
      <?php require_once("../php/layouts/contents_footer.php"); ?>
      <!-- /footer -->

    </div>
    <!-- / innerWrap -->

  </div>
  <!-- / wrapper -->
</div>
<!-- /Contact -->


<!--build:js assets/js/vendor.min.js -->
<script type="text/javascript" src="assets/js/vendor/jquery-3.5.2.min.js"></script>
<script src="assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/vendor/jquery.easing.js"></script>
<script src="assets/js/vendor/jquery.imgloader.min.js"></script>
<script src="assets/js/vendor/slick.js"></script>
<!-- endbuild -->

<script type="text/javascript" src="assets/js/common.min.js"></script>
<script type="text/javascript" src="assets/js/other.js"></script>
</body>

</html>
