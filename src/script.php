<?php

include 'functions.php';

/* Defaults =============== */
// Folder where extracted data files placed
$save_directory = './data';

$scanned_directory = array_diff(scandir($save_directory), array('..', '.'));

?>