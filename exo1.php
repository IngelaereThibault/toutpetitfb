<?php
require('config/blade.php');
Raatio
// render the template file and echo it
echo $blade->make('exo1', ['titre' => 'bienvenu', 'page' => 'principale'])->render();