@extends('layouts.app')

@section('content')

<p style ="text-align: right">Witaj, {{ Auth::user()->name }}!</p>


				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Home</a></li>
							<li><a href="#third">Twoje wypożyczenia</a></li>
                            <li><a href="#four">Wypożycz książkę</a></li>
							<li><a href="#first">Nasze biblioteki</a></li>
							<li><a href="#five">Edytuj swoje konta</a></li>
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

						<!-- Third Section -->

						<section id="third" class="main special">
        <header class="major">
            <h2>Aktualnie wypożyczone książki</h2>
        </header>
        <table class="table">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Tytuł książki</th>
                    <th>Status</th>
                    <th>Data wypożyczenia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rentals as $rental)
                <tr>
                    <td>{{ $rental->book->ISBN }}</td>
                    <td>{{ $rental->book->tytul }}</td>
                    <td>{{ $rental->status }}</td>
                    <td>{{ $rental->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

<!-- Four Section -->

<section id="four" class="main special">
        <header class="major">
            <h2>Wyszukaj książkę</h2>
            <form action="{{ route('books.search') }}" method="GET">
                <div class="row gtr-uniform">
                    <div class="col-12">
                        <input type="text" name="query" id="query" value="" placeholder="Wyszukaj książkę...">
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" value="Szukaj" class="primary"></li>
                        </ul>
                    </div>
                </div>
            </form>
        </header>

        
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

							<!-- Five Section -->
							<section id="five" class="main special">
								<header class="major">
									<h2>Edytuj swoje konta</h2>
								</header>
								<footer class="major">
									<ul class="actions special">
										<li><a href="/editAccountt" class="button">Edytuj</a></li>
									</ul>
								</footer>
							</section>

					</div>
					</div>

@endsection