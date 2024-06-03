@extends('layouts.app')

@section('content')


				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Home</a></li>
							<li><a href="#first">Dodaj książkę</a></li>
							<li><a href="#second">Usuń książkę</a></li>
							<li><a href="#third">Nadaj rolę</a></li>
                            <li><a href="#four">Usuń rolę</a></li>
                            <li><a href="#four">Wyloguj</a></li>
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
									<h2>Dodaj książke</h2>
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
										<li><a href="generic.html" class="button">Dodaj</a></li>
									</ul>
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Usuń książkę</h2>
								</header>
								<footer class="major">
                                    <ul class="actions special">
										<li><a href="generic.html" class="button">Usuń</a></li>
									</ul>
								</footer>
							</section>

						<!-- Third Section -->
                        <section id="third" class="main special">
								<header class="major">
									<h2>Nadaj rolę</h2>
								</header>
								<footer class="major">
                                    <ul class="actions special">
										<li><a href="generic.html" class="button">Zatwierdź</a></li>
									</ul>
								</footer>
							</section>


                    <!-- Fourth section -->
                    <section id="four" class="main special">
								<header class="major">
									<h2>Usuń rolę</h2>
								</header>
								<footer class="major">
                                    <ul class="actions special">
										<li><a href="generic.html" class="button">Zatwierdź</a></li>
									</ul>
								</footer>
							</section>

					</div>
					</div>

					@endsection