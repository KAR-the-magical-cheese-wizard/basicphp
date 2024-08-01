<?php
    include '../connect.php';
    $sql = 'INSERT INTO tb_user(username,password,fullname,phone,email,linetoken) VALUES("'.$_REQUEST['username'].'","'.$_REQUEST['password'].'","'.$_REQUEST['fullnazme'].'","'.$_REQUEST['phone'].'","'.$_REQUEST['email'].'","'.$_REQUEST['linetoken'].'")';
    $query = $conn->query($sql);
    if ($query) {
        echo "<script>
            alert('เพิ่มข้อมูลสำเร็จ')
            window.location.href='../register.php';
            </script>";
    } else {
        echo $conn->error;
    }



?>