<?php
    include '../connect.php';
    $sql = "UPDATE tb_user SET username='".$_REQUEST['username']."',password='".$_REQUEST['password']."',fullname='".$_REQUEST['fullname']."',phone='".$_REQUEST['phone']."',email='".$_REQUEST['email']."',linetoken='".$_REQUEST['linetoken']."' WHERE user_id='".$_REQUEST['user_id']."' ";
    $query = $conn->query($sql);
    if($query){
        echo "<script>
        alert('แก้ไขข้อมูลสำเร็จ');
        window.location.href='../show_user.php';
        </script>";
    }else{
        echo $conn->error;
    }
?>