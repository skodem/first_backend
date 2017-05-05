<?php
session_start();


if ($_SERVER['REQUEST_URI'] == '/') {
	$Page = 'index';
	$Module = 'index';
} else {
	$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$URL_Parts = explode('/', trim($URL_Path, ' /'));
	$Page = array_shift($URL_Parts);
	$Module = array_shift($URL_Parts);

	if (!empty($Module)) {
		$Param = array();
		for ($i = 0; $i < count($URL_Parts); $i++) {
			$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
		}
	}
}

if ($Page == 'index') include ('page/index.php');
else if ($Page == 'idea') include ('page/idea.php');
else if ($Page == 'layiheler') include ('page/layiheler.php');
else if ($Page == 'mehsullar') include ('page/mehsullar.php');
else if ($Page == 'server') include ('page/server.php');
else if ($Page == 'terefdaslar') include ('page/terefdaslar.php');
else if ($Page == 'sendidea') include ('form/sendidea.php');

function Head($p1) {
	echo '<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>'.$p1.'</title>
		<link type="text/css" rel="stylesheet" href="css/fonts.css">
		<link type="text/css" rel="stylesheet" href="css/reset.css">
		<link type="text/css" rel="stylesheet" href="css/style.css">
		<link type="text/css" rel="stylesheet" href="css/responsive.css">
		<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/flexslider.css">
		<link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico">
	</head>';
}

function Menu () {
	echo '<header>
	<div class="center">
		<div class="header-logo">
			<a href="/"><img src="img/logo_head.png" alt=""></a>
		</div>
		<div class="fr">
			<span class="header-menu-mob">
				<button class="btn openmenu"></button>
			</span>
			<nav class="header-menu">
				<ul>
					<li><a href="/">Ana səhifə</a></li>
					<li><a href="/mehsullar">Məhsullar</a></li>
					<li><a href="/heller">Həllər</a></li>
					<li><a href="/layiheler">Layihələr</a></li>
					<li><a href="/idea">İdeanı paylaş</a></li>
					<li><a href="/elaqe">Əlaqə</a></li>
					<li class="lang"><a href="#">AZ</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>';
}

function Footer () {
	echo '<footer>
	<div class="center">
		<div class="footer-logo">
			<a href="/"><img src="img/logo_footer.png" alt=""></a>
		</div>
		<div class="fr">
			<nav class="footer-menu">
				<ul>
					<li><a href="/">Ana səhifə</a></li>
					<li><a href="/mehsullar">Məhsullar</a></li>
					<li><a href="/heller">Həllər</a></li>
					<li><a href="/layiheler">Layihələr</a></li>
					<li><a href="/idea">İdeanı paylaş</a></li>
					<li><a href="/elaqe">Əlaqə</a></li>
				</ul>
			</nav>
		</div>
		<div class="footer-info">
			<div class="info-email"><i class="fa fa-envelope"></i>info@ipc.az</div>
			<div class="c2016">Bütün haqları qorunur © 2016</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/site.js"></script>';
}
?>