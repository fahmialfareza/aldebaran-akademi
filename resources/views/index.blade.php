<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aldebaran Akademi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

	<link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" style="background-color: #15273a; position: fixed;" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div id="colorlib-logo">
								<a href="{{ route('index') }}"><img style="width: 83px; height:32px;" src="{{ asset('assets/images/logo_full.png') }}"></img></a></div>
						</div>
						<div class="col-md-9 text-right menu-1">
							<ul>
								<li><a onclick="myFunction()" href="#beranda">Beranda</a></li>
								<li><a onclick="myFunction()" href="#keunggulan">Keunggulan</a></li>
								<li><a onclick="myFunction()" href="#benefit">Benefit</a></li>
								<li><a onclick="myFunction()" href="#testimoni">Testimoni</a></li>
								<li><a onclick="myFunction()" href="#tutorial">Tutorial</a></li>
								<li><a onclick="myFunction()" href="#kontak">Kontak</a></li>
								<li><a target="_blank" href="https://moodle.aldebaran-akademi.com">Masuk</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="beranda" class="video-hero" style="height: 700px; background-image: url({{asset('assets/images/blog-3.jpg')}});  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<!-- <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> -->
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>SELAMAT DATANG!</h2>
								<p style="font-size: 20px;">Kami hadir dengan beragam fitur yang menarik. Paket Modul Lengkap Persiapan Ujian CPNS/Kedinasan. Mulai dari Ebook SKD, Ratusan Soal Latihan SKD, Software Aplikasi SKD Offline, Psikotes, serta Try Out lengkap dengan Pembahasan.</p>
								<p><a href="#paket" class="btn btn-primary btn-lg btn-custom">Daftar Sekarang</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="colorlib-featured">
			<div class="row animate-box">
				<div class="featured-wrap">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="{{asset('assets/images/image_1.jpeg')}}" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="{{asset('assets/images/image_2.jpeg')}}" alt="">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2">
								<div class="featured-entry">
									<img class="img-responsive" src="{{asset('assets/images/image_3.jpeg')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="keunggulan" class="colorlib-services colorlib-bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Keunggulan</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-browser"></i>
							</span>
							<div class="desc">
								<h3>Evaluasi Hasil</h3>
								<p>Kami menghadirkan informasi secara realtime terhadap hasil pemahaman Anda pada materi yang sudah disediakan. Anda akan dapat mengetahui sejauh mana kemampuan Anda dalam Evaluasi kami, sehingga dapat memantau perkembangan belajar Anda.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-loop2"></i>
							</span>
							<div class="desc">
								<h3>Materi Terupdate</h3>
								<p>Kami menghadirkan materi dan soal latihan terupdate untuk membantu persiapan menghadapi ujian.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-calendar"></i>
							</span>
							<div class="desc">
								<h3>Akses Fleksibel</h3>
								<p>Kami mengerti kesibukan Anda, sehingga Anda tidak perlu khawatir tidak memiliki waktu untuk belajar, karena Anda bebas untuk akses kapan saja. Sesuaikan dengan waktu senggang Anda, dan gunakan untuk berlatih.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="benefit" class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Benefit</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-books"></i>
							</span>
							<div class="desc">
								<h3>Modul dan Kisi-Kisi</h3>
								<p>Kami menghadirkan modul belajar dan kisi-kisi lengkap (TWK, TIU, & TKP) yang dapat diakses kapan saja dan dimana saja.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-clock2"></i>
							</span>
							<div class="desc">
								<h3>Manajemen Waktu</h3>
								<p>Membantu Anda untuk memperhitungkan estimasi waktu saat mengerjakan soal.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="testimoni" class="colorlib-blog" style="background-color: white;">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Testimoni Pengguna</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<article>
							<h2>Ikut TO Kedinasan di Aldebaran Akademi ngebantu banget</h2>
							<p class="admin"><span>Lolos Perangkingan SKD 2020 dengan Skor 367</span></p>
							<p>Apalagi ini pengalaman pertama saya ikut SKD, dan Alhamdulillah ngga kaget ngerjain soal tes nya karena udah ikut TO Kedinasan di Aldebaran. Dan buat temen-temen yang mau ikut SKD, apalagi yang baru nyoba tahun ini terus bingung gimana aja soal-soal SKD, boleh dicoba buat ikut TO Kedinasan yang diadain sama Aldebaran Akademi.</p>
							<p class="author-wrap"><a href="#" class="author-img"></a> <a href="#" class="author">Regita Apridina Dewi, STIP Jakarta</a></p>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article>
							<h2>Buruan join daripada nyesel</h2>
							<p class="admin"><span>Lolos Perangkingan SKD 2020 dengan Skor 350</span></p>
							<p>Buat kawan-kawan semua yang ingin mempersiapkan untuk melaksanakan tes SKD Sekolah Ikatan Dinas, bisa join bimbel Aldebaran Akademi. Dijamin Lolos dan masuk perangkingan. Kapan lagi kan bimbel sebagus ini dengan harga murah. Buruan join daripada nyesel.</p>
							<p class="author-wrap"><a href="#" class="author-img"></a> <a href="#" class="author">Muhammad Husni Ramdhani, PTDI – STTD</a></p>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article>
							<h2>Aldebaran Akademi mantep deh pokoknya</h2>
							<p class="admin"><span>Lolos Perangkingan SKD 2020 dengan Skor 354</span></p>
							<p>Soal-soalnya hamper sama juga dengan soal ujian SKD. Jadi saat mengerjakan Soal SKD di tes kemarin, saya merasa sudah terbiasa dengan soal-soalnya. Temen-temen yang ingin daftar Sekolah Kedinasan, boleh nih dicoba di Aldebaran Akademi, Enak banget banyak keuntungannya.</p>
							<p class="author-wrap"><a href="#" class="author-img"></a> <a href="#" class="author">Marcelino Rohy, PIP Semarang</a></p>
						</article>
					</div>
				</div>
			</div>
		</div>

		<div id="paket" class="colorlib-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Pilihan Paket</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<div class="pricing">
							<h2 class="pricing-heading">Mulai dari</h2>
							<div class="price"><sup class="currency">Rp</sup>50.000<small>per tahun</small></div>
							<p>Kumpulan Materi SKD (Bebas Akses Selamanya) <br>Tryout SKD <br>Kumpulan Materi Psikotes (Bebas Akses Selamanya) <br>Latihan Soal TWK <br>Latihan Soal TIU <br>Latihan Soal TKP</p>
							<p><a target="_blank" href="https://wa.me/6285156480825/?text=Saya ingin daftar Member Aldebaran Akademi" class="btn btn-primary">Daftar Sekarang</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="tutorial" class="colorlib-pricing" style="background-color: white;">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Cara Belajar di Aldebaran Akademi (Jika Sudah Menjadi Member)</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center colorlib-heading animate-box">
						<div class="pricing">
							<h2 class="pricing-heading">Desktop</h2>
							<p><img class="img-responsive" src="{{ asset('assets/images/desktop.png') }}" alt=""></p>
							<p><a target="_blank" href="{{ asset('assets/images/tutorial_desktop.png') }}" class="btn btn-primary">Cara Belajar dengan Desktop</a></p>
						</div>
					</div>
					<div class="col-md-4 text-center colorlib-heading animate-box">
						<div class="pricing">
							<h2 class="pricing-heading">Android</h2>
							<p><img class="img-responsive" src="{{ asset('assets/images/android.png') }}" alt=""></p>
							<p><a target="_blank" href="{{ asset('assets/images/tutorial_android.png') }}" class="btn btn-primary">Cara Belajar dengan Android</a></p>
						</div>
					</div>
					<div class="col-md-4 text-center colorlib-heading animate-box">
						<div class="pricing">
							<h2 class="pricing-heading">iOS</h2>
							<p><img class="img-responsive" src="{{ asset('assets/images/ios.png') }}" alt=""></p>
							<p><a target="_blank" href="{{ asset('assets/images/tutorial_ios.png') }}" class="btn btn-primary">Cara Belajar dengan iOS</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-contact" id="kontak">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center animate-box">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
								<!-- <h2>Kontak</h2> -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="col-md-4">
										<a target="_blank" href="https://wa.me/6285156480825">
											<div class="con-info">
												<p><span><i class="icon-whatsapp"></i></span> +6285156480825</p>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a target="_blank" href="https://t.me/aldebaranakademi">
											<div class="con-info">
												<p><span><i class="icon-telegram"></i></span> t.me/aldebaranakademi</p>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a target="_blank" href="https://instagram.com/aldebaran.akademi">
											<div class="con-info">
												<p><span><i class="icon-instagram"></i></span> aldebaran.akademi</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" style="padding-top: 0em;">
			<div class="copy" style="padding: 1em 0em">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dibuat dengan <i class="icon-heart" aria-hidden="true"></i> oleh <a href="https://aldebaran-akademi.com" target="_blank">Aldebaran Akademi</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
	<!-- YTPlayer -->
	<script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('assets/js/main.js')}}"></script>

	<script>
		$('a[href*="#"]')
		.not('[href="#"]')
		.not('[href="#0"]')
		// Remove links that don't actually link to anything
		.click(function(event) {
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
				&&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();

					var scrollTop = target.offset().top - $('.sticky-top').height();

					$('html, body').animate({
						scrollTop: scrollTop
					}, 1000)
				}
			}
		});
	</script>
	<script type="text/javascript">
		function myFunction() {
			if ( $('body').hasClass('offcanvas') ) {

				$('body').removeClass('offcanvas');
				$('.js-colorlib-nav-toggle').removeClass('active');

			}
		}
	</script>

	</body>
</html>
