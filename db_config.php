<?php
$con = mysqli_connect("localhost", "root", "", "sweet_bliss");
try {
    if ($con) {
        // echo "connection successful";
    } else {
        throw new Exception("connection failed");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
