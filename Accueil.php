<?php
require('config/blade.php');

// render the template file and echo it
echo $blade->make('accueil', ['titre' => 'bienvenue', 'page' => 'principale'])->render();