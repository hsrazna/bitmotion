<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	
	<link rel="stylesheet" href="libs/bootstrap-grid/bootstrap-grid.css">
	<link rel="stylesheet" href="libs/font-awesome.min.css">
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="libs/magnific-popup/dist/magnific-popup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="css/main.min.css">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

	<?php require_once "include/header.php"; ?>
	<?php require_once "include/slider.php"; ?>
	<?php require_once "include/whyinvestment.php"; ?>
	<?php require_once "include/footer.php"; ?>

	<div id="call-back" class="popup zoom-anim-dialog mfp-hide">
		<h2 class="popup-title">Оставьте<br> заявку сейчас</h2>
		<hr class="popup-hr popup-hr1">
		<p class="popup-p">и получите возможность начать<br> инвестировать уже сегодня</p>
		<form action="/">
			<input type="text" name="" id="" class="popup-input" placeholder="Как Вас зовут?">
			<input type="text" name="" id="" class="popup-input" placeholder="E-mail" value="E-mail">
			<label class="popup-checkbox">
				<input type="checkbox" name=""><span></span>
				Согласен с обработкой <a href="#" class="popup-link popup-link1">персональных данных</a>
			</label>
			<button type="submit" class="header-link popup-submit"><span>оставить заявку</span></button>
		</form>
	</div>

	<div id="thanks" class="popup popup_pad zoom-anim-dialog mfp-hide">
		<div class="popup-img">
			<img src="img/popup-thanks.png" alt="">
		</div>
		<h2 class="popup-title">заявка успешно отправлена</h2>
		<hr class="popup-hr">
		<p class="popup-p">На Вашу почту отправлено письмо с дальнейшими действиями, в ближайшее время с Вами свяжется наставник и расскажет дальнейшие шаги в системе</p>
	</div>

	<script src="libs/jquery/dist/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
	<script src="libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.min.js"></script>
	<script src="js/scripts.min.js"></script>

</body>
</html>
