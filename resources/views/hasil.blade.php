<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>D'Benafs Consulting</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Schooling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/jquery-ui.css" type='text/css' />
		<link rel="stylesheet" href="css/smoothbox.css" type='text/css' >
		<!-- //Custom Theme files -->
		<!-- js -->
		<script src="js/jquery.min.js"></script>
		<!-- //js -->
		<!--webfont-->
		<link href='//fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->
</head>
<body>
    <div class="navku">
        <div class="navigation">
				<div class="container">
					<div class="logo">
						<h1><a href="{{ url('/') }}">D'Benafs</a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="images/menu.png" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li><a data-hover="Home" href="{{ url('/') }}">Home</a></li>
								<li><a data-hover="Pricing" href="{{ url('pricing') }}">Pricing</a></li>
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Materi" role="button" aria-haspopup="true" aria-expanded="false">Materi <span class="caret"></span></a>
										<ul class="dropdown-menu">
												<li><a data-hover="Psi.Perkembangan" href="{{ url('psikologi_perkembangan') }}">Psi.Perkembangan</a></li>
												<li><a data-hover="Bahaya Gangguan" href="{{ url('bahaya_gangguan') }}">Bahaya Gangguan</a></li>
												<li><a data-hover="Manfaat Diagnosa" href="{{ url('manfaat_diagnosa') }}">Manfaat Diagnosa</a></li>
										</ul>
									  </li>
								<li><a data-hover="Test" href="{{ url('test') }}">Test</a></li>
								<li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>
							</ul>
						</nav>
							<!-- script-for-menu -->
								<script>
								   $( "span.menu" ).click(function() {
									 $( "ul.nav1" ).slideToggle( 300, function() {
									 // Animation complete.
									  });
									 });
								</script>
							<!-- /script-for-menu -->
					</div>
				</div>
			</div>
    </div>			
<!-- //navbar -->
<div class="test">
	<h3></h3>
	<h3>Hasil Kesimpulan Personality Test</h1>
		<p class="garis">______________________________</p>
		<p class="garis">________________________________________________</p>
		<p>Sifat anda cenderung:</p>
	<p><?php echo $nilai; ?></p>
	<br><br>

	<a style="font-size: 24px;" class="btn btn-success" href="{{ url('test') }}">Kembali Ke Test</a></li>
	<br><br><br>
</div>
<!-- //pricing -->
<!-- contact -->
	<div class="contact" id="contact">
		<div class="col-md-6 w3agile_contact_left">
			<h3>Contact Us</h3>
			<p>Jika anda mempunyai pertanyaan seputar psychotherapy atau apapun yang menyangkut d'benafs consulting silahkan ajukan dengan mengisi
				form yang kami sediakan dibawah
			</p>
			<form action="{{ url('/') }}" method="post">
				<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
				<input type="submit" value="Send">
				{{csrf_field()}}
			</form>
		</div>
		<div class="col-md-6 w3agile_contact_right">
			<h3><a href="{{ url('/') }}">D'Benafs</a></h3>
			<div class="col-xs-6 w3agile_contact_right_agileinfo">
				<h4>Address</h4>
				<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>8921 California Long Beach <i>PO Box 8921 202 East Ocean.</i></p>
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+) 0983 010 823</p>
				<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
			<div class="col-xs-6 w3agile_contact_right_agileinfo">
				<h4>Follow Us</h4>
				<div class="agileits_social_icons">
					<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
					<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
					<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="w3_copy_right">
				<p>© 2017 D'Benafs. All rights reserved | Designs by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //contact -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<script src="{{ asset('js/laravelapp.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>