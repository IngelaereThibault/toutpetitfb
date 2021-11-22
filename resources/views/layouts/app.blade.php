<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />

    <title>{{ $titre }}</title>
</head>

<body>
<h1>Bienvenu sur ce super site</h1>
<nav>
    <a href="Accueil.php">Accueil</a>
    <a href="Amis.php">Amis</a>
</nav>
<h2>Page en cours : {{ $page }}</h2>
<div class="container">
    @yield("content")
</div>
</body>
</html>
