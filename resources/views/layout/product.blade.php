<!DOCTYPE>
<html>
	<head>
		<title>Main Template design preferences | @yield('title')</title>
	</head>
	<body>
		<header>
			<hgroup>
			<h1>
			@if($__env->yieldContent('header'))
				<strong>Yep! It found out the header</strong><br/>
				@yield('header')
			@else
				ESS SYSTEM Test 
			@endif
			</h1>
			</hgroup>
		</header>

		<footer>
			<p>&copy; All Rights Reserved By System</p>
		</footer>

	</body>
</html>