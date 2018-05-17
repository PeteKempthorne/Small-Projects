<?php

$title = $_POST['emailtitle'];
$to = $_POST['emailto'];
$body = $_POST['emailbody'];

$headers = 'From: no-reply@stmichaelsbexhill.org';

mail($to, $title, $body, $headers);

echo "check mail";

?>