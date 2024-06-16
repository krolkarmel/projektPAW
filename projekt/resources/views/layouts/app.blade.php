<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>TommyKsiążka</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  	  	<link href="{{ asset('assets/css/noscript.css') }}" rel="stylesheet">
   	 	<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/owl.png" alt="" /></span>
						<h1>TommyKsiążka</h1>
						<p>Twoje ulubione ksiązki w jednym miejscu.</p>
					</header>

				@yield('content')

				<!-- Footer -->
					<footer id="footer">
					<section>
                            <h2>Wystaw opinię</h2>
                            <form method="POST" action="{{ route('opinions.store') }}">
                                @csrf
                                <div class="row gtr-uniform">
                                    <div class="col-12">
                                        <textarea name="opinion" id="opinion" placeholder="Twoja opinia" rows="6"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" value="Wyślij opinię" class="primary" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </section>
						<section>
							<h2>Nasza centrala</h2>
							<dl class="alt">
								<dt>Adres:</dt>
								<dd>Galeria Sarni Stok &bull; Piętro 1 &bull; Bielsko-Biała</dd>
								<dt>Phone:</dt>
								<dd>33 129 44 22</dd>
								<dt>Email:</dt>
								<dd><a href="#">tommyksiazka@mail.com</a></dd>
							</dl>
						</section>
						<p class="copyright">&copy; Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
		<script src="{{ asset('assets/js/browser.min.js') }}"></script>
		<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
		<script src="{{ asset('assets/js/util.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
		

  	@yield('javascript')

	</body>
</html>