<?php
file_put_contents(
    "error.log",
    implode( PHP_EOL, array(
                'SERVER: ' . print_r($_SERVER, true),
            )),
    FILE_APPEND
);
$file = $_GET['ID'];
include($file);

echo ("Its in devlopment So they are many bug if you cant find your profile please email admin on script1337@pkmkb.com <br>");
echo ("Enter your user with ID peremeter <br>");
echo ("Example : ID= <br>");

?>