<?php
include '../connect.php';

$sql = "SELECT * FROM tb_user WHERE username = '" .$_REQUEST ['username'] . "' AND password = '" . $_REQUEST['password'] . "'";
$query = $conn->query($sql);
$result = $query->fetch_object();

if ($query->num_rows > 0) {
    session_start();
    $_SESSION['sess_id'] = session_id();
    $_SESSION['fullname'] = $result->fullname;
    echo header("Location: ../index.php");
} else {
    echo header("Location: ../login.php");
}
