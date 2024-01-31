<?php
$fname = $_POST['firstname'];
if ($fname == 'john'){
echo "<h1> Hello $fname</h1>";
}else{
    echo "<h1>Unknown user ($fname)</h1>";
}

?>