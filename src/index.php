<?php
require_once('php/init.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<title></title>
	<meta name="description" content="">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

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

	<!-- wrapper -->
	<div id="wrapper">

		<!-- innerWrapper -->
		<div id="innerWrapper">

			<!-- header -->
			<?php require_once("php/layouts/contents_header.php"); ?>
			<!-- /header -->

			<!-- ctArea -->
			<div id="ctArea">
				<!-- Slider Image -->
				<div class="sliderContainer">
					<div class="sliderImg">
						<div>
							<img src="assets/img/top/slider1.png">
						</div>
						<div>
							<img src="assets/img/top/slider2.png">
						</div>
						<div>
							<img src="assets/img/top/slider3.png">
						</div>
						<div>
							<img src="assets/img/top/slider4.png">
						</div>
					</div>
					<a href="index.php" class="fixedImageContainer">
						<div class="one">
							<img src="assets/img/top/logo.png">
						</div>
						<div class="two">
							<img src="assets/img/top/clude_lab.png">
						</div>
					</a>
				</div>
				<!-- /Slider Image -->
				<!-- Business -->
				<div class="business">
					<div class="businessTitle">
						<h1 class="titleText">our business</h1>
						<p>
							プラスチック製品を開発し、
							<span>新しい価値を提供する</span>
						</p>
					</div>
					<div class="businessText">
						<p class="upperText">
							<span>CLUDE LABは</span>
							プラスチックネジを中心とした
							<br>樹脂製品の開発をします。	
						</p>
						<p class="middleText">
						材料選定、金型設計・製造、成形までを	
						<span>トータルに提案を行うことで</span>
						</p>
						<p class="lowerText">
							ワンストップでイノベーティブな製品生
							<span>み出します。</span>
						</p>
					</div>
				</div>
				<!-- /Business -->

				 <!-- product -->
				 <div class="product fadein">
				 	<div>
				 		<img src="assets/img/top/product.png">
				 	</div>
				 	<h1>products</h1>
				 </div>
				 <!-- product -->

				 <!--Three Materials -->
				 <div class="materialContainer">
				 	<h1 class="titleText">
				 		3つの素材
				 	</h1>
				 	<div class="threeMaterial">
				 		<div class="peak fadein">
				 			<div>
				 				<img src="assets/img/top/peak.png">
				 			</div>
				 			<div class="imgText">
				 				<h1>ピーク</h1>
				 				<span>PEEK</span>
				 			</div>
				 			<button>More</button>
				 		</div>
				 		<div class="reny fadein">
				 			<div>
				 				<img src="assets/img/top/reny.png">
				 			</div>
				 			<div class="imgText">
				 				<h1>レニー</h1>
				 				<span>RENY</span>
				 			</div>
				 			<button>More</button>
				 		</div>
				 		<div class="pc fadein">
				 			<div>
				 				<img src="assets/img/top/pc.png">
				 			</div>
				 			<div class="imgText">
				 				<h1 class="lastTitle">ポリカーボネート</h1>
				 				<span>PC</span>
				 			</div>
				 			<button>More</button>
				 		</div>
				 	</div>
				 </div>
				 <!--/Three Materials -->

				  <!-- Peek Screw -->
				  <div class="screwContainer">
					  	<div class="screw fadein">
					  		<div class="ScrewImg">
					  			<img src="assets/img/top/peek_screw.png">
					  		</div>
					 		<h1>peek screew</h1>
					 	</div>
					 	<div class="textOnly">
					 		<p>
					 			エンプラの中でも最高級の素材のねじで、特に耐薬品性に優れており、溶解する唯一の化学品は濃硫酸のみです。半導体製造装置など採用されています。
					 			<span>
					 				また耐熱性・難燃性にも優れており、それとともに軽量・絶縁性の性質を合わせもつことから自動車・航空機産業でも採用されています。
					 			</span>
					 		</p>
					 	</div>
				  </div>
				 <!-- /Peek Screw -->

				 <!-- Three Colum Image One-->
				 <div class="imgContainer">
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/cap_img.png">
				 		<button>CAP M6 X 20</button>
				 	</div>
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/ph_img.png">
				 		<button>PH M6 X 20</button>
				 	</div>
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/bt_img.png">
				 		<button>BT M6 X 20</button>
				 	</div>
				 	<div class="pdfBtn fadein">
				 		<a href="#" class="">
				 			<img src="assets/img/top/pdf_button.png">
				 			<span>物性表・寸法表表示</span>
				 		</a>
				 	</div>
				 </div>
				 <!-- /Three Colum Image One-->

				  <!-- Reny Screw -->
				  <div class="screwContainer">
					  	<div class="screw fadein">
					  		<div class="ScrewImg">
					  			<img src="assets/img/top/reny_screw.png">
					  		</div>
					 		<h1>reny screew</h1>
					 	</div>
					 	<div class="textOnly">
					 		<p>
					 			エンジニアプラスチック中でも最も高強度・高弾性率のネジです。
					 			<span>
					 				それはポリアミド MXDX6 を基材とし、50% ガラス繊維で強化された材料でできているから。
					 			</span>
					 			低い熱伝導を活かして冷蔵庫など断熱性が要求される分野、絶縁性・非磁性を活かして電子機器の電装分野、耐蝕性を活かして海洋機器分野、軽量性を活かして自動車・航空中分野に使用されています。
					 		</p>
					 	</div>
				  </div>
				 <!-- /Reny Screw -->

				  <!-- Three Colum Image Two-->
				 <div class="imgContainer">
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/cap_img2.png">
				 		<button>CAP M6 X 20</button>
				 	</div>
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/ph_img2.png">
				 		<button>PH M6 X 20</button>
				 	</div>
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/bt_img2.png">
				 		<button>BT M6 X 20</button>
				 	</div>
				 	<div class="pdfBtn fadein">
				 		<a href="#" class="">
				 			<img src="assets/img/top/pdf_button.png">
				 			<span>物性表・寸法表表示</span>
				 		</a>
				 	</div>
				 </div>
				 <!-- /Three Colum Image Two-->

				  <!-- PC Screw -->
				  <div class="screwContainer">
					  	<div class="screw fadein">
					  		<div class="ScrewImg">
					  			<img src="assets/img/top/pc_screw.png">
					  		</div>
					 		<h1>pc screew</h1>
					 	</div>
					 	<div class="textOnly">
					 		<p>
					 			粘り強く、特に耐衝撃性に優れている。機械的特性・電気的特性等をバランスよく備え、自己消化性も持ち、耐候性、毒性がないなど、あらゆる特性を備えており、電子・自動車・医療分野に至るまで幅広く使用されています。また、透明性に優れ、光学的な用途にも使用されます。
					 		</p>
					 	</div>
				  </div>
				 <!-- /PC Screw -->

				  <!-- Three Colum Image Three-->
				 <div class="imgContainer">
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/cap_img3.png">
				 		<button>CAP M6 X 20</button>
				 	</div>
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/ph_img3.png">
				 		<button>PH M6 X 20</button>
				 	</div>
				 	<div class="colImg fadein">
				 		<img src="assets/img/top/bt_img3.png">
				 		<button>BT M6 X 20</button>
				 	</div>
				 	<div class="pdfBtn fadein">
				 		<a href="#" class="">
				 			<img src="assets/img/top/pdf_button.png">
				 			<span>物性表・寸法表表示</span>
				 		</a>
				 	</div>
				 </div>
				 <!-- /Three Colum Image Three-->

				 <!-- company -->
				 <div class="company fadein">
				 	<div>
				 		<img src="assets/img/top/company.png">
				 	</div>
				 	<h1>company</h1>
				 </div>
				 <!-- company -->

				  <!-- Form Box -->
				<div class="textForm">  	
				  	<div class="formBoxContainer">
				  		<div class="formBoxCover">
					  		<div class="formBox one">
					  			<div class="leftText">
					  				<span>名称</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					株式会社CLUDE LAB
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox two">
					  			<div class="leftText">
					  				<span>設立</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
										平成31 年4 月創業
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox three">
					  			<div class="leftText">
					  				<span>資本金</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					500 万円
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox four">
					  			<div class="leftText">
					  				<span>代表取締役</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					判治 良昭
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox five">
					  			<div class="leftText">
					  				<span>所在地</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					〒154-0011
					  					東京都世田谷区上馬3-10-3
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox six">
					  			<div class="leftText">
					  				<span>TEL</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					03-0000-0000
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox seven">
					  			<div class="leftText">
					  				<span>FAX</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					03-0000-0000
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox eight">
					  			<div class="leftText">
					  				<span>E-MAIL</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					info@clude-lab.com
					  				</span>
					  			</div>
					  		</div>
					  		<div class="formBox nine">
					  			<div class="leftText">
					  				<span>事業内容</span>
					  			</div>
					  			<div class="rightText">
					  				<span>
					  					プラスチックネジの製造・販売及び　開発
					  				</span>
					  			</div>
					  		</div>
					  	</div>
				  	</div>
			 	</div>

				  <!-- /Form Box -->
			</div>
			<!-- /ctArea -->

			<!-- footer -->
			<?php require_once("php/layouts/contents_footer.php"); ?>
			<!-- /footer -->

		</div>
		<!-- / innerWrap -->

	</div>
	<!-- / wrapper -->


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
