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
								<li><a data-hover="Home" href="{{ url('welcome') }}">Home</a></li>
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
@include('_partial.flash_message')
<div class="test">

	<h3>Personality Test</h1>
	<p class="garis">______________________________</p>
    <p class="garis">________________________________________________</p>
	<p>Kerjakan soal dibawah untuk mengetahui apakah cara berpikir anda sudah sesuai dengan tahap perkembangan yang sesungguhnya.</p>
	<p>Pengerjaan soal dibawah ini hanya untuk yang berusia <strong>15 tahun keatas!</strong></p>
	<br><br>
    <form action="{{ url('test') }}" method="post">
        <div class="soal">
			<ol>
				<li>
					<p>Ketika guru/dosen/atasan menerangakan suatu materi untuk tugas dan ada hal yang tidak anda pahami, apa yang akan anda lakukan?</p>
					<div>
						<input type="radio" name="q1" value="3" id="question-1-answers-A"/>
						<label for="question-1-answers-A">A) Mengacungkan tangan dan meminta dengan sopan agar dijelaskan sekali lagi</label>
					</div>					
					<div>
						<input type="radio" name="q1" value="2" id="question-1-answers-B"/>
						<label for="question-1-answers-B">B) Anda hanya diam saja sampai teman anda yang bertanya</label>
					</div>					
					<div>
						<input type="radio" name="q1" value="1" id="question-1-answers-C"/>
						<label for="question-1-answers-C">C) Diam saja</label>
					</div>					
				</li> 
				<li>
					<p>Misalkan saat anda sedang memimpin sebuah rapat namun anggota rapat anda tidak menyetujui usulan anda dan mengajukan protes, hal yang akan anda lakukan adalah</p>
					<div>
						<input type="radio" name="q2" value="2" id="question-2-answers-A"/>
						<label for="question-2-answers-A">A) Mengatakan “protesnya nanti saja setelah selesai rapat”</label>
					</div>
					<div>
						<input type="radio" name="q2" value="3" id="question-2-answers-B"/>
						<label for="question-2-answers-B">B) Mempersilakan anggota anda untuk mengutarakan pendapatnya saat itu juga</label>
					</div>                
					<div>
						<input type="radio" name="q2" value="1" id="question-2-answers-C"/>
						<label for="question-2-answers-C">C) Meminta anggota anda agar tidak memotong pembicaraan anda selaku pemimpin rapat karena anda punya hak atas hal tersebut</label>
					</div>                         
				</li>        
				<li>
					<p>Kalau sedang berkhayal, kira-kira hal apa yang anda khayalkan?</p>
					<div>
						<input type="radio" name="q3" value="2" id="question-3-answers-A"/>
						<label for="question-3-answers-A">A) Hal-hal yang sedang dihadapi saat itu</label>
					</div>
					<div>
						<input type="radio" name="q3" value="1" id="question-3-answers-B"/>
						<label for="question-3-answers-B">B) Merenung pengalaman-pengalaman dimasa lalu</label>
					</div>                
					<div>
						<input type="radio" name="q3" value="3" id="question-3-answers-C"/>
						<label for="question-3-answers-C">C) Cita-cita anda di masa depan</label>
					</div>                            
				</li>
				<li>
					<p>Hidup adalah...</p>
					<div>
						<input type="radio" name="q4" value="3" id="question-4-answers-A"/>
						<label for="question-4-answers-A">A) Penuh dengan cobaan dan  kesulitasn, banyak hambatan tetapi semuanya bisa diatasi dengan perjuangan dan usaha yang sungguh</label>
					</div>
					<div>
						<input type="radio" name="q4" value="1" id="question-4-answers-B"/>
						<label for="question-4-answers-B">B) Hidup ini  berat dan menakutkan</label>
					</div>                
					<div>
						<input type="radio" name="q4" value="2" id="question-4-answers-C"/>
						<label for="question-4-answers-C">C) Hidup menyenangkan karena semuanya bisa dihadapi dengan mudah dan selalu tercapai</label>
					</div>                           
				</li>
				<li>
					<p>Tujuan menuntut ilmu adalah</p>
					<div>
						<input type="radio" name="q5" value="1" id="question-5-answers-A"/>
						<label for="question-5-answers-A">A) Untuk tempat bergaul dan memenuhi keinginan orang tua</label>
					</div>
					<div>
						<input type="radio" name="q5" value="3" id="question-5-answers-B"/>
						<label for="question-5-answers-B">B) Untuk membangun masa depan agar memperoleh hidup yang lebih baik</label>
					</div>                
					<div>
						<input type="radio" name="q5" value="2" id="question-5-answers-C"/>
						<label for="question-5-answers-C">C) Agar bisa naik kelas/tingkat/naik jabatan</label>
					</div>                           
				</li>
				<li>
					<p>Jika seorang rekan anda mengkritik sikap atau tindakan anda, bagaimana cara anda menyikapinya?</p>
					<div>
						<input type="radio" name="q6" value="2" id="question-6-answers-A"/>
						<label for="question-6-answers-A">A) Menyelidiki apakah kritik tersebut benar dan sifatnya membangun</label>
					</div>
					<div>
						<input type="radio" name="q6" value="1" id="question-6-answers-B"/>
						<label for="question-6-answers-B">B) Sedih namun mengakui bahwa kritik tersebut benar</label>
					</div>                
					<div>
						<input type="radio" name="q6" value="3" id="question-6-answers-C"/>
						<label for="question-6-answers-C">C) Marah dan membela diri</label>
					</div>                           
				</li>
				<li>
					<p>Ketika anda bertemu rekan anda sedang bermesraan dengan orang yang anda ketahui bukan kekasihnya, maka yang akan anda lakukan adalah</p>
					<div>
						<input type="radio" name="q7" value="3" id="question-7-answers-A"/>
						<label for="question-7-answers-A">A) Anda akan menilai tindakan tersebut tidak punya malu,jahat, tidak beradab dan anda berusaha untuk menghubungi pasangan rekan anda</label>
					</div>
					<div>
						<input type="radio" name="q7" value="2" id="question-7-answers-B"/>
						<label for="question-7-answers-B">B) Anda memahami bahwa hal tersebut adaalah hak merekaa namun anda malu untuk melihatnya</label>
					</div>                
					<div>
						<input type="radio" name="q7" value="1" id="question-7-answers-C"/>
						<label for="question-7-answers-C">C) Itu adalah hak mereka dan tidak peduli dengan hal tsb</label>
					</div>                           
				</li>
				<li>
					<p>Anda tidak diterima di tempat kerja/sekolah yang anda daftar, anda tentunya sedihh, solusinya adalah</p>
					<div>
						<input type="radio" name="q8" value="2" id="question-8-answers-A"/>
						<label for="question-8-answers-A">A) Menyerahkan keputusan pada orang tua</label>
					</div>
					<div>
						<input type="radio" name="q8" value="3" id="question-8-answers-B"/>
						<label for="question-8-answers-B">B) Memutuskan untuk tidak melanjutkan kerja/sekolahh dan memanfaatkan bakat untuk mencari uang</label>
					</div>                
					<div>
						<input type="radio" name="q8" value="1" id="question-8-answers-C"/>
						<label for="question-8-answers-C">C) Kecewa, sedih dan putus asa meskipun terlihat pasrah</label>
					</div>                          
				</li>
				<li>
					<p>Anda memiliki banyak kegiatan sementara anda memiliki tanggung jawab dirumah, namun secara pribadi anda juga memiliki tujuan dan ingin mencapai tujuan tersebut dalam pendidikan maupun karier, yang anda lakukan adalah</p>
					<div>
						<input type="radio" name="q9" value="1" id="question-9-answers-A"/>
						<label for="question-9-answers-A">A) Mengerjakan apa saja yang sempat, sebatas kemampuan anda</label>
					</div>
					<div>
						<input type="radio" name="q9" value="3" id="question-9-answers-B"/>
						<label for="question-9-answers-B">B) Membagi waktu dengan cermat, sehingga kewajiban dan tujuan anda berjalan dengan baik</label>
					</div>                
					<div>
						<input type="radio" name="q9" value="2" id="question-9-answers-C"/>
						<label for="question-9-answers-C">C) Anda bingung dan berakhir anda mengorbankan salah satunya</label>
					</div>                        
				</li>
				<li>
					<p>Anda harus melunasi biaya kuliah anda sementara anda tahu orang tua anda sedang tidak ada uang, yang anda lakukan adalah</p>
					<div>
						<input type="radio" name="q10" value="2" id="question-10-answers-A"/>
						<label for="question-10-answers-A">A) Menigirim surat penundaan pembayaran kepada pihak kampus dengan alasan yang sesuai kenyataan</label>
					</div>
					<div>
						<input type="radio" name="q10" value="1" id="question-10-answers-B"/>
						<label for="question-10-answers-B">B) Mencari pinjaman dari saudara atau sahabat yang anda percaya</label>
					</div>                
					<div>
						<input type="radio" name="q10" value="1" id="question-10-answers-C"/>
						<label for="question-10-answers-C">C) Mencari perkerjaan melalio berbagai cara untuk melunasi uang sekolah</label>
					</div>                        
				</li>
			</ol>
		</div>
		<br>
		<input style="font-size: 24px;" class="btn btn-success" type="submit" value="Lihat Hasil Test" />
		<br>
		<br>
		{{csrf_field()}}
    </form>
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