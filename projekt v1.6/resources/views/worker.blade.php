@extends('layouts.app')

@section('content')


				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Home</a></li>
							<li><a href="#first">Dodaj książki</a></li>
							<li><a href="#second">Edytuj książki</a></li>
							<li><a href="#five">Edytuj swoje dane</a></li>
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
									<h2>Dodaj książki</h2>
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
										<li><a href="/createbooks" class="button">Dodaj</a></li>
									</ul>
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Edytuj książki</h2>
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
										<li><a href="/books" class="button">Edytuj</a></li>
									</ul>
								</footer>
							</section>

								<!-- Five Section -->
								<section id="five" class="main special">
								<header class="major">
									<h2>Edytuj swoje konta</h2>
								</header>
								<footer class="major">
									<ul class="actions special">
										<li><a href="{{ route('account.edit') }}" class="button">Edytuj</a></li>
									</ul>
								</footer>
							</section>


					</div>
					</div>

					@endsection