<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma super application</title>
    <link href="/toutpetitfb/css/bootstrap.css" rel="stylesheet">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
   	<link rel="stylesheet" type="text/css" href="/toutpetitfb/css/style.css">

</head>

<body>
<header id="headerminifb">
    <img class="logo" src="/toutpetitfb/css/images/logo.png" height=50px>


<?php if(isset($_SESSION['info'])): ?>
    <div>
        <strong>Information : </strong> <?php echo e($_SESSION['info']); ?>

    </div>
<?php endif; ?>

<nav>
    <ul class="nav__links">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php?action=decouvrir">Découvrir</a> </li>
</ul>
</nav>
        
    <?php if(isset($_SESSION['id'])): ?>
        Bonjour  <?php echo e($_SESSION['login']); ?> <a class="btnco" href='index.php?action=deconnexion'>Deconnexion</a>
    <?php else: ?>
        
    <?php endif; ?>
    
</header>
<main class="container">
    <?php echo $__env->yieldContent("content"); ?>
</main>

<footer>Le super pied</footer>
</body>
</html>
