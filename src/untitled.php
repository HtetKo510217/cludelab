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
				</div>
				<!-- /Slider Image -->
				<!-- Business -->
				<div class="business">
					<h1 class="titleText">our business</h1>
					<div class="businessText">
						<h2>
							プラスチック製品を開発し、新しい価値を提供する
						</h2>
						<pre>
							CLUDE LABはプラスチックネジを中心とした
									樹脂製品の開発をします。	
							   材料選定、金型設計・製造、成形までを
									トータルに提案を行うことで
						   ワンストップでイノベーティブな製品生み出します。
						</pre>
					</div>
				</div>
				<!-- /Business -->
				 <!-- product -->
				 <div class="product">
				 	<h1>products</h1>
				 </div>
				 <!-- product -->
				 <!--Three Materials -->
				 <div class="materialContainer">
				 	<h1 class="titleText">
				 		3つの素材
				 	</h1>
				 	<div class="threeMaterial">
				 		<div class="peak">
				 			<div>
				 				<img src="assets/img/top/peak.png">
				 			</div>
				 			<div class="imgText">
				 				<h1>ピーク</h1>
				 				<span>PEEK</span>
				 			</div>
				 			<button>More</button>
				 		</div>
				 		<div class="reny">
				 			<div>
				 				<img src="assets/img/top/reny.png">
				 			</div>
				 			<div class="imgText">
				 				<h1>レニー</h1>
				 				<span>RENY</span>
				 			</div>
				 			<button>More</button>
				 		</div>
				 		<div class="pc">
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
				 <div class="peekScrew">
				 	<h1>peek screew</h1>
				 </div>
				 <!-- /Peek Screw -->
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
