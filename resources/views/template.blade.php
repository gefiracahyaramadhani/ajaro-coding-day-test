<!DOCTYPE html>
<html>
<head>
	<title>CodingDayTest - @yield('judul')</title>
    <link rel="icon" href="{{ asset('/gambar/logo.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <style type="text/css">
        div.form-data {
            max-width: 500px;
        }
    </style>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-light bg-dark">
		<a class="navbar-brand m-auto text-light" href="#">KELOLA DATA BARANG</a>
	</nav>
	@yield('konten')
</div>
</body>
</html>