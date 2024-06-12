@extends('layouts.app')

@section('content')


				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Home</a></li>
							<li><a href="#first">Usuń użytkownika</a></li>
							<li><a href="#third">Edytuj rolę</a></li>
                            <li>
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Wyloguj się
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
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
									<h2>Usuń użytkownika</h2>
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
										<li><a href="/listUsers" class="button">Usuń</a></li>
									</ul>
								</footer>
							</section>


						<!-- Third Section -->
                        <section id="third" class="main special">
								<header class="major">
									<h2>Edytuj rolę</h2>
								</header>
								<footer class="major">
                                    <ul class="actions special">
										<li><a href="/editRole" class="button">Edytuj</a></li>
									</ul>
								</footer>
							</section>



					</div>
					</div>

					@endsection