<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #04AA6D;
        }
       
        .button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body>
<ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="show_user.php">All user</a></li>
        <li><a href="#contact">Contact</a></li>         
        <li><a href="#about">About</a></li>
        <li style="float:right;">
                <a class="active" href="login.php">Logout</a>
        </li>   
    </ul>
<h1>A Fancy Table</h1>
<a href="register.php" class="button">ADD</a>
<table id="customers">
  <tr>
    <th>#</th>
    <th>Username</th>
    <th>ชื่อ-นามสกุล</th>
    <th>E-mail</th>
    <th>เบอร์โทรศัพท์</th>
    <th>Action</th>
  </tr>
  <?php
    $sql = "SELECT * FROM tb_user";
    $query = $conn->query($sql);
    $i=0;
    while ($fet_user = $query->fetch_object()){
        $i++;
    
?>
 <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $fet_user->username; ?></td>
    <td><?php echo $fet_user->fullname; ?></td>
    <td><?php echo $fet_user->email; ?></td>
    <td><?php echo $fet_user->phone; ?></td>
    <td>
      <a href="register.php?user_id=<?php echo $fet_user->user_ID;?>" class="button">Edit</a>
      <a href="api/api_deluser.php?user_id=<?php echo $fet_user->user_ID;?>" class="button" style="background-color: red;" onclick="return confirm('คุณต้องการลบรายการนี้ใช่ไหม?')">Del</a>

    
    </td>
  </tr>
    <?php } ?>
</table>

</body>
</html>