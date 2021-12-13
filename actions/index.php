<?php
if (isset($_SESSION['id'])){
echo $blade->make("index")->render();
}
else { 
    echo $blade->make("login")->render();
}

?>