<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/blog">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/about">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/contact">Contact</a>
</li>
</ul>
</nav>
@yield('content')
<footer class="bg-dark py-4 text-white mt-4">
<div class="container">
Situs Alumni SMAN 1 Banjarharjo 2005 | Copyright © {{ date("Y") }} Reuni05sman1banjarharjo
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>