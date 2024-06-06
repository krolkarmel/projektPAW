@extends('layouts.app')
@section('content')
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Home</a></li>
							<li><a href="#first">Nasze biblioteki</a></li>
							<li><a href="#second">Opinie o nas</a></li>
							<li><a href="/register">Załóż konto</a></li>
                            <li><a href="/login">Zaloguj</a></li>
							<li><a href="#cta"></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>TommyKsiazka</h2>
										</header>
										<p>"Nasza sieć bibliotek na Śląsku to miejsce, gdzie każdy znajdzie coś dla siebie! Oferujemy szeroki wybór książek, wydarzeń kulturalnych i przestrzeni do nauki oraz relaksu. Dołącz do naszej społeczności i odkryj bogactwo literatury oraz inspirujących spotkań. Serdecznie zapraszamy!"</p>
										<!-- <ul class="actions">
											<li><a href="generic.html" class="button">Learn More</a></li>
										</ul> -->
									</div>
									<span class="image"><img src="images/owl.png" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Nasze biblioteki</h2>
								</header>
								<ul class="features">
									<li>
										<!-- <span class="icon solid major style1 fa-code"></span> -->
									</li>
									<li>
										<!-- <span class="icon major style3 fa-copy"></span> -->
									</li>
									<li>
										<!-- <span class="icon major style5 fa-gem"></span> -->
									</li>
								</ul>
								<footer class="major">
									<ul class="actions special">
										<li><a href="/listLibrary" class="button">Sprawdź</a></li>
									</ul>
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Nasze statystyki</h2>
								</header>
								<ul class="statistics">
									<!-- <li class="style1">
										<span class="icon solid fa-code-branch"></span>
										<strong>232</strong> Nasi użytkownicy
									</li> -->
                                    
									<li class="style4">
										<span class="icon solid fa-laptop"></span>
										<strong>{{ count(App\Models\User::all()) }}</strong> Nasi użytkownicy
									</li>
									<li class="style2">
										<span class="icon fa-folder-open"></span>
										<strong>8,192</strong> Książek w asortymencie
									</li>
									<li class="style3">
										<span class="icon solid fa-signal"></span>
										<strong>{{ count(App\Models\Library::all()) }}</strong> Nasze biblioteki
									</li>
									<li class="style5">
										<span class="icon fa-gem"></span>
										<strong>1,024</strong> Pozytywnych opinii
									</li>
								</ul>
								<!-- <p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p> -->
								<footer class="major">
									<!-- <ul class="actions special">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul> -->
								</footer>
							</section>

						<!-- Get Started -->
							<section id="third" class="main special">
								<header class="major">
									<h2>Dołącz do nas już teraz!</h2>
									<p>Załóż bezpłatne konto na naszej stronie.<br />
									Zyskaj dostęp do premier, newslettera oraz promocji.</p>
								</header>
								<footer class="major">
									<ul class="actions special">
										<li><a href="/register" class="button primary">Załóż konto</a></li>
										<!-- <li><a href="generic.html" class="button">Learn More</a></li> -->
									</ul>
								</footer>
							</section>

					</div>

					@endsection
