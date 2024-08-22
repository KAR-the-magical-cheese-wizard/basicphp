<?php
    include '../connect.php';
    $sql = 'INSERT INTO tb_user(username,password,fullnamze,phone,email,linetoken) VALUES("'.$_REQUEST['username'].'","'.$_REQUEST['password'].'","'.$_REQUEST['fullname'].'","'.$_REQUEST['phone'].'","'.$_REQUEST['email'].'","'.$_REQUEST['linetoken'].'")';
    $query = $conn->query($sql);

    if (isset($_FILES)) {

        copy($_FILES['img']['tmp_name'], "../images/" . $_FILES['img']['name']);

        $sql_img = "UPDATE tb_user SET img='" . $_FILES['img']['name'] . "' ORDER BY user_id DESC LIMIT 1";
        $query_img = $conn->query($sql_img);
    } else {
        echo "No FiLe selected";
    }


    exit();
    if ($query) {
        echo "<script>
            alert('เพิ่มข้อมูลสำเร็จ')
            window.location.href='../register.php';
            </script>";
    } else {
        echo $conn->error;
    }



?>