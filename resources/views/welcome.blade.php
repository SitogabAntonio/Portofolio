<!DOCTYPE html>
<html lang="en">

<head>
	<title>Nio - My Portofolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<style>
	.services-1 .skill-img {
		display: flex;
		align-items: center;
		justify-content: center;
		width: 80px;
		height: 80px;
		margin: 0 auto 20px;
	}

	.services-1 .skill-img img {
		max-width: 100%;
		max-height: 100%;
		object-fit: contain;
	}
</style>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Nio</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third js-fullheight order-md-last img"
							style="background-image:url({{ asset('images/togab_almet22.png') }});">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello!</span>
								<h1 class="mb-4 mt-3">I'm <span>Sitogab Antonio</span></h1>
								<h2 class="mb-4">A PHP Web Developer</h2>
								<p>
									<a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My
										works</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
						data-scrollax-parent="true">
						<div class="one-third js-fullheight order-md-last img"
							style="background-image:url({{ asset('images/togab_almet11.png') }});">
							<div class="overlay"></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">Hello!</span>
								<h1 class="mb-4 mt-3">I'm a <span>web developer</span> based in Indonesia</h1>
								<p>
									<a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">My
										works</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services-section">
		<div class="container">
			<div class="row justify-content-center py-5 mt-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Skills</h1>
					<h2 class="mb-4">My Skills</h2>
					<p>Explore my technical expertise, interpersonal abilities, and the tools I use to deliver
						high-quality projects.</p>
				</div>
			</div>

			<!-- Hard Skills -->
			<div class="row justify-content-center">
				<div class="col-md-12 text-center ftco-animate">
					<h3 class="mb-4">Hard Skills</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/python.png') }}" alt="Python" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Python</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/java.png') }}" alt="Java" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Java</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/php.png') }}" alt="PHP" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">PHP</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/html.png') }}" alt="HTML" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">HTML</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/css.png') }}" alt="CSS" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">CSS</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/javascript.png') }}" alt="JavaScript" width="50"
								height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">JavaScript</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/mysql.png') }}" alt="MySQL" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">MySQL</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/bootstrap.png') }}" alt="Bootstrap" width="50"
								height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Bootstrap</h3>
						</div>
					</a>
				</div>
			</div>

			<!-- Soft Skills -->
			<div class="row justify-content-center mt-5">
				<div class="col-md-12 text-center ftco-animate">
					<h3 class="mb-4">Soft Skills</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-muscle"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Hardwork</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-user"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Solo Work</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-users"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Team Work</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-rocket"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Agile</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-clock"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Time Management</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-bolt"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Work Under Pressure</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-comment"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Communication</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="icon">
							<i class="fi fi-sc-puzzle-piece"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5">Problem Solving</h3>
						</div>
					</a>
				</div>
			</div>

			<!-- Tools/Software -->
			<div class="row justify-content-center mt-5">
				<div class="col-md-12 text-center ftco-animate">
					<h3 class="mb-4">Tools & Software</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/vscode.png') }}" alt="VSCode" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">VSCode</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/laravel.png') }}" alt="Laravel" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Laravel</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/codeigniter.png') }}" alt="CodeIgniter4" width="50"
								height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">CodeIgniter4</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/tableau.png') }}" alt="Tableau" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Tableau</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/postman.png') }}" alt="Postman" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Postman</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/mysql.png') }}" alt="MySQL" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">MySQL</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/figma.png') }}" alt="Figma" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Figma</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/trello.png') }}" alt="Trello" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">Trello</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<a href="#" class="services-1">
						<span class="skill-img">
							<img src="{{ asset('images/skills/msoffice.png') }}" alt="MS Office" width="50" height="50">
						</span>
						<div class="desc">
							<h3 class="mb-5">MS Office</h3>
						</div>
					</a>
				</div>
			</div>
		</div>

		<style>
			.services-1 .skill-img {
				display: flex;
				align-items: center;
				justify-content: center;
				width: 80px;
				height: 80px;
				margin: 0 auto 20px;
			}

			.services-1 .skill-img img {
				max-width: 100%;
				max-height: 100%;
				object-fit: contain;
			}

			.services-1 .icon i.fi {
				font-size: 40px;
				line-height: 1;
				color: #007bff;
			}
		</style>
	</section>

	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Projects</h1>
					<h2 class="mb-4">My Projects</h2>
					<p>Here are some of the projects I’ve worked on, combining design, technology, and innovation.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/projet-4.png);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">PPW Project - DWAB Connect Hobby - Laravel</a></h3>
							<span>Web Dev</span>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/project-5.png);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">PSI - Sistem Informasi Gereja GKII Balige- Laravel, Android Studio</a></h3>
							<span>Web Dev & Andriod</span>
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url(images/project-11.png);">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Kontrak Digital PKWT PT.RPN - CodeIgniter + API</a></h3>
							<span>Web Dev & Integration API</span>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">
							<div class="project img ftco-animate d-flex justify-content-center align-items-center"
								style="background-image: url(images/project-6.png);">
								<div class="overlay"></div>
								<div class="text text-center p-4">
									<h3><a href="#">Generate New Variance Motif Ulos With Stable Diffusion Model -
											Python, Machine Learning</a></h3>
									<span>Finetuning Machine Learning</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-project" id="certificates-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h1 class="big big-2">Certificates</h1>
					<h2 class="mb-4">My Certificates</h2>
					<p>Here are some of the certifications I’ve earned, showcasing my expertise in various technical and
						professional domains.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url({{ asset('images/certificates/certificate-1.png') }});">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Alibaba Cloud Data Analysis Speciality</a></h3>
							<span>Data Analyst</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url({{ asset('images/certificates/cetificate-2.png') }});">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Backend at PT. Riset Perkebunan Nusantara</a></h3>
							<span>Field Work Practice / Intern</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url({{ asset('images/certificates/certificate-3.png') }});">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Student Creativity Program “Pelatihan Metode Ilmiah dan Analisis”</a></h3>
							<span>Speaker Assistant</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url({{ asset('images/certificates/certificate-4.png') }});">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">AI & Cybersecurity</a></h3>
							<span>Participant</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url({{ asset('images/certificates/certificate-5.png') }});">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Head of Department</a></h3>
							<span>Public Relation Department</span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="project img ftco-animate d-flex justify-content-center align-items-center"
						style="background-image: url({{ asset('images/certificates/certificate-6.png') }});">
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="#">Welcoming Party Information System</a></h3>
							<span>Head of Documentation Section</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<style>
			.project.img {
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
				height: 300px;
				/* Atur tinggi tetap untuk konsistensi */
				width: 100%;
			}

			.project .overlay {
				background: rgba(0, 0, 0, 0.5);
				/* Pastikan overlay tidak mengganggu gambar */
				width: 100%;
				height: 100%;
				position: absolute;
				top: 0;
				left: 0;
				z-index: 1;
			}

			.project .text {
				position: relative;
				z-index: 2;
				/* Pastikan teks di atas overlay */
			}
		</style>
	</section>

	<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 ftco-animate text-center">
					<h2>I'm <span>Available</span> for freelancing</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h1 class="big big-2">Contact</h1>
					<h2 class="mb-4">Contact Me</h2>
					<p>Let’s connect! Whether you’re interested in my work, want to collaborate, or simply have a
						question, I’m just a message away.</p>
				</div>
			</div>

			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<h3 class="mb-4">Address</h3>
						<p>Pancur Batu, Merek, Kab.Karo, Sumatera Utara, 22173</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://1234567920">+62 822-9742-2654</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:info@yoursite.com">niogirsang8@gmail.com</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<h3 class="mb-4">Website</h3>
						<p><a href="#">yoursite.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Skills</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Machine Learning</a>
							</li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>UI</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Pancur Batu, Merek,
										Kab.Karo, Sumatera Utara, 22173</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+62
											822-9742-2654
										</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">niogirsang8@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/aos.js') }}"></script>
	<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('js/scrollax.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>