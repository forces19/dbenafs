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
<script src="js/jquery.vide.min.js"></script>
	<div data-vide-bg="video/srix">
		<div class="center-container">
			<div class="navigation">
				<div class="container">
					<div class="logo">
						<h1><a href="{{ url('/') }}">D'Benafs</a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="images/menu.png" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li class="active"><a data-hover="Home" href="{{ url('/') }}">Home</a></li>
								<li><a data-hover="About" href="#about" class="scroll">About</a></li>								
								<li><a data-hover="Team" href="#team" class="scroll">Team</a></li>
								<li><a data-hover="Pricing" href="{{ url('pricing') }}">Pricing</a></li>
								<li class="dropdown">
										<a data-hover="Materi" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Materi <span class="caret"></span></a>
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
					<div class="clearfix"></div>
				</div>
			</div>
			@include('_partial.flash_message')
			<div class="w3ls_banner_info">
				<div class="container">
					<div class="w3l_banner_logo">
						<h2>D</h2>
					</div>
					<h3>potensi, bakat dan minat merupakan hal yang penting dalam hidup</h3>
					<p>D'Benafs Consulting memberikan solusi yang handal untuk anda dalam menemukan potensi, bakat dan minat yang tepat</p>
					<div class="more">
						<a href="#" class="hvr-underline-from-center" data-toggle="modal" data-target="#myModal">Visi Misi</a>
					</div>
					<!--modal-video-->
					<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									D'Benafs
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<img src="images/17.jpg" alt=" " class="img-responsive" />									
										<p>
										<b>Visi</b>
										<br>
										Menjadi lembaga konsultasi psikologi yang terdepan dan terpercaya dalam pelayanan dan dapat diandalam
										oleh masyarakat luas untuk pemberdayaan diri dan meningkatkan kebermaknaan hidup.
										<br><br>
										<b>Misi</b><br>
										• Memberikan pelayanan psikologis yang terbaik dengan selalu memberikan inovasi produk layanan secara berkelanjutan.<br>
										• Memberikan pelayanan jasa dan praktek psikologis yang sesuai dengan kebutuhan klien.<br>
										• Membanguan hubungan yang sinergis dengan para praktisi dalam pelayanan sehingga dapat memberikan pelayanan yang optimal.			
										</p>														
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- about -->
	<div id="about" class="about">
		<div class="container">
			<div class="agileits_about_grids">
				<div class="col-md-6 agileits_about_grid_left">
					<h3>What We Offer</h3>
					<p>Mengembangkan individu sesuai dengan potensinya. 
					Memahami individu dengan karakterisktik dan permasalahannya. 
					Mengetahui metode yang digunakan untuk mengembangkan individu.</p>
				</div>
				<div class="col-md-6 agileits_about_grid_right">
					<img src="images/16.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-4 wthree_banner_bottom_left">
				<img src="images/1.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-8 wthree_banner_bottom_right">
				<h3>Program Layanan yang terdapat di D'Benafs Consulting</h3>
				<p>Dalam rangka memberikan pelayanan psikologis yang terbaik dengan selalu memberikan inovasi produk layanan secara berkelanjutan dan
				   memberikan pelayanan jasa praktek psikologis yang sesuai dengan kebutuhan klien, berikut program layanan yang kami sediakan :
				</p>
				<ol>
					<li><a href="#" class="btn btn-success" data-toggle="modal" data-target="#Assesment">Assesment Center</a></li>
					<div class="modal video-modal fade" id="Assesment" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									Assesment Center
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<img src="images/assesment.jpg" alt=" " class="img-responsive" />
										<p>Merupakan proses penggalian informasi tentang aspek-aspek psikologis dengan menggunakan serangkaian pemeriksaan psikologis yang 
											sesuai untuk menemukan gangguan dan permasalahan psikologis serta memprediksi potensi yang dimiliki individu. Layanan ini 
											diperuntukan untuk mengetahui gangguan psikologis, deteksi dini anak berkebutuhan khusus, permasalahan psikologis, permasalahan 
											siswa disekolah, dan permasalahan orang tua disekolah.
										<br><br>
										<b>a) Asesmen Gangguan Psikologi</b>
										<br>
										Bertujuan untuk mengatasi atau mencegah dampak dari ketidak siapan mental individu dalam menghadapi tuntutan hidup yang semakin 
										kompleks yang berujung pada gangguan psikologis.
										<br>
										<b>b) Asesmen  Anak Berkebutuhan Khusus</b>
										<br>
										Program layanan yang bertujuan untuk mendiagnosa kondisi psikologis anak agar dapat memberikan informasi tentang potensi dan 
										kelemahan pribadi yang dapat digunakan dalam proses pengembangan diri anak.
										<br>
										<b>c) Asesmen Kesulitan Belajar</b>
										<br>
										Bertujuan untuk mendiagnosa kondisi psikologis peserta didik menyangkut gejala-gejala kesulitan belajar yang dialami untuk 
										menentukan cara menanganan yang paling tepat.
										<br>
										<b>d) Asesmen Potensi Siswa</b>
										<br>
										Bertujuan untuk menggali potensi kecerdasan, bakat minat serta serta potensi vokasional secara individual.
										<br>
										<b>e) Asesmen Problem dan Komunikasi</b>
										<br>
										Layanan ini guna menemukan permasalahan yang menyeluruh terhadap problem komunikasi di pendidikan serta komunikasi di masyarakat.
										</p>
									</div>
								</section>
							</div>
						</div>
					</div>
					<li><a href="#" class="btn btn-success" data-toggle="modal" data-target="#Training">Training</a></li>
					<div class="modal video-modal fade" id="Training" tabindex="-1" role="dialog" aria-labelledby="myModal">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										Training
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
									</div>
									<section>
										<div class="modal-body">
											<img src="images/training.jpg" alt=" " class="img-responsive" />
											<p>
											<b>a) Excellent Motivation Training</b>
											<br>
											Bertujuan untuk menciptakan atau merubah pribadi seseorang menjadi pribadi yang berani dan optimis.
											<br>
											<b>b) Problem Solving Training</b>
											<br>
											Bertujuan untuk membantu individu meningkatkan skill problem solvingnya.
											<br>
											<b>c) Positive Psychotherapy Training</b>
											<br>
											Layanan ini fokus pada tiga aspek yaitu hidup yang menyenangkan, hidup yang terikat, dan hidup yang penuh makna.
											<br>
											<b>d) Parenting Training</b>
											<br>
											Layanan ini bertujuan agar dapat memberikan pemahaman dan perspektif baru yang tepat para orang tua dalam merawat putra-putri mereka yang memiliki kebutuhan khusus.
											<br>
											<b>e) Peer Konseling Training</b>
											<br>
											Bertujuan untuk meminimalisir hal-hal negative yang dilakukan para remaja pada saat masa pencarian jati diri dengan cara memberikan pengetahuan,keterampilan maupun etika agar mampu mengatasi permasalahan yang dihadapinya atau temen sebayanya.
											</p>
										</div>
									</section>
								</div>
							</div>
						</div>
					<li><a href="#" class="btn btn-success" data-toggle="modal" data-target="#Psychotherapy">Psychotherapy</a></li>
					<div class="modal video-modal fade" id="Psychotherapy" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									Psychotherapy
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<img src="images/therapy.jpg" alt=" " class="img-responsive" />
										<p>
										<b>a) Konseling</b>
										<br>
										Bertujuan untuk membantu individu dalam mengatasi dan menyelesaikan permasalahan yang dihadapai. Ditandai dengan hubungan professional antara konselor dengan klien. Hal ini untuk membantu klien memahami pandangan tentang kehidupan dan belajar untuk mencapai tujuan yang ditentukannya sendiri.
										<br>
										1) Konseling anak
										<br>
										Bertujuan membantu orang tua untuk menghadapi dan menyelesaikan permasalahan-permasalahan yang berkaitan dengan tumbuh kembang anak.
										<br>
										2) Konseling remaja
										<br>
										Bertujuan untuk membantu orang tua ataupun remaja untuk menghadapai dan menyelesaikan permasalahan-permasalahan yang dihadapi remaja baik yang berkaitan dengan hubungan orang tua dan anak, permasalahan pergaulan atau permasalahan lain yang dihadapi remaja.
										<br>
										3) Konseling dewasa
										<br>
										Bertujuan untuk membantu klien dalam menghadapi dan menyelesaikan permasalahan dalam keluarha, rumah tangga, pergaulan, pekerjaan dan lainnya.
										<br>
										4) Konseling kesiswaan
										<br>
										Bertujuan untuk membantu klien menghadapi dan menyelesaikan permasalahan yang berkaitan dengan pendidikan, pemilihan jurusan, penentuan minat dan bakat, serta lainnya.
										<br><br>
										<b>b) Terapi keluarga</b>
										<br>
										Bertujuan untuk merubah perilaku yang tidak sesuai dalam sebuah hubungan dalam keluarga serta memperbaiki kualitas hubungan dalam keluarga.
										<br>
										<b>c) Terapi Psikologi Positif</b>
										<br>
										Bertujuan untuk membantu individu dalam meningkatkan kebermaknaan hidup dan pemberdayaandiri agar menjadi pribadi yang utuh.
										</p>
									</div>
								</section>
							</div>
						</div>
					</div>
				</ol>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom-image-text -->
	<div class="banner-bottom-image-text">
		<div class="col-md-8 banner-bottom-image-text-left">
			<h3>Who We Are</h3>
			<p>D’ BENAFS Consulting merupakan lembaga konsultasi yang menyediakan layanan jasa dan praktek psikologi 
				di bidang perkembangan, guna memberikan layanan jasa dan praktek psikologis yang dapat membantu manusia 
				dari berbagai kalangan mulai dari anak hingga orang dewasa dalam memberdayakan potensi dirinya serta
				 mampu meningkatkan kebermaknaan hidup. Oleh karena itu, kami menggunakan pendekatan psikologi perkembangan 
				 sebagai acuan untuk menentukan metodologi yang mampu memberikan penilaian dan keputusan berdasarkan sudut pandang terpercaya.</p>
			<h4>Potensi, bakat dan minat dapat dikembangankan demi memberdayakan hidup suatu individu.</h4>
		</div>
		<div class="col-md-4 banner-bottom-image-text-right">
			<img src="images/2.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //banner-bottom-image-text -->
<!-- team -->
<div class="team-bottom">
		<div class="team" id="team">
				<div class="container">
					<h3>Meet Our Team</h3>
					<p class="nostrud">D'Benafs menyediakan team psikiater-psikiater yang profesional</p>
					<div class="agile_team_grids">
						<div class="col-md-3 agile_team_grid">
							<div class="view view-sixth">
								<img src="images/Andyni.jpg" alt=" " class="img-responsive" />
								<div class="mask">						
									<div class="agileits_social_icons">
										<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
										<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
										<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
									</div>
								</div>
							</div>
							<h4>Andyni</h4>
							<p>Psikolog</p>
						</div>
						<div class="col-md-3 agile_team_grid">
							<div class="view view-sixth">
								<img src="images/Bunga.jpg" alt=" " class="img-responsive" />
								<div class="mask">								
									<div class="agileits_social_icons">
										<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
										<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
										<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
									</div>
								</div>
							</div>
							<h4>Bunga</h4>
							<p>Psikolog</p>
						</div>
						<div class="col-md-3 agile_team_grid">
							<div class="view view-sixth">
								<img src="images/Erlita.jpg" alt=" " class="img-responsive" />
								<div class="mask">									
									<div class="agileits_social_icons">
										<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
										<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
										<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
									</div>
								</div>
							</div>
							<h4>Erlita</h4>
							<p>Psikolog</p>
						</div>
						<div class="col-md-3 agile_team_grid">
							<div class="view view-sixth">
								<img src="images/Erna.jpg" alt=" " class="img-responsive" />
								<div class="mask">									
									<div class="agileits_social_icons">
										<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
										<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
										<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
									</div>
								</div>
							</div>
							<h4>Erna</h4>
							<p>Psikolog</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="container">
					<div class="agile_team_grids2">
						<div class="col-md-10 agile_team_grid" style="auto">
							<div class="view view-sixth">
								<img src="images/Fatma.jpg" alt=" " class="img-responsive" />
								<div class="mask">									
									<div class="agileits_social_icons">
										<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
										<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
										<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
									</div>
								</div>
							</div>
							<h4>Fatma</h4>
							<p>Psikolog</p>
						</div>
						<div class="col-md-10 agile_team_grid">
							<div class="view view-sixth">
								<img src="images/Kartika.jpg" alt=" " class="img-responsive" />
								<div class="mask">									
									<div class="agileits_social_icons">
										<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
										<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
										<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
									</div>
								</div>
							</div>
							<h4>Kartika</h4>
							<p>Psikolog</p>
						</div>
						<div class="col-md-10 agile_team_grid">
							<div class="view view-sixth">
								<img src="images/Nadira.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<div class="agileits_social_icons">
										<a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
										<a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
										<a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
									</div>
								</div>
							</div>
							<h4>Nadira</h4>
							<p>Psikolog</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
</div>
<!-- //team -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Testimonials</h3>
			<p class="nostrud">Berikut merupakan beberapa testimonial dari konsumen kami</p>
			<div class="testimonials-grids">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Joy Allen</a></li>
						<li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab" aria-controls="carl">Chris Lii</a></li>
						<li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab" aria-controls="james">Allen Rosy</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">
								<img src="images/2.png" alt=" " class="img-responsive" />
								<h4>Joy Allen<span>Mahasiswa</span></h4>
								<p>Metode terapis yang digunakan oleh D'Benafs Consulting sangat menakjubkan.</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
							<div class="tabcontent-grids">
								<img src="images/3.png" alt=" " class="img-responsive" />
								<h4>Chris Lii<span>Ibu Rumah Tangga</span></h4>
								<p>Perkembangan karakter dari anak saya semakin baik hari demi harinya, terimakasih d'benafs.</p>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
							<div class="tabcontent-grids">
								<img src="images/4.png" alt=" " class="img-responsive" />
								<h4>Allen Rosy<span>Karyawati</span></h4>
								<p>Sebelumnya saya sangat stress menghadapi masalah-masalah yang ada di hidup saya, berkat d'benafs kini saya dapat menghadapi masalah-masalah saya dengan baik</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //testimonials -->
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