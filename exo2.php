<?php
require('config/blade.php');

// render the template file and echo it
echo $blade->make('exo2', ['titre' => 'exo2', 'page' => 'exo2', 'utilisateur'=>'Gilles Audemard'])->render();