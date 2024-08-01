<?php
    include '../connect.php';
    $sql = "DELETE FROM tb_user WHERE user_id='".$_REQUEST['user_id']."'";
    $query = $conn->query($sql);
    if ($query) {
        echo "<script>
        alert('ลบข้อมูลสำเร็จ');
        window.location.href='../show_user.php';
        </script>";
    }
?>