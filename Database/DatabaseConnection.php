<?php

$db = new mysqli('localhost', 'root', '', 'gharbhada');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>