<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    <?php include "db_connec.php" ?>
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 pt-4 mt-4">
        <h2 class="text-center p-2 m-0 bg-primary text-white">User Management System
          <a href="index.php" class='btn btn-warning'>Add User</a>
        </h2>
        <!-- // php code start -->
        <?php
        $selectData = "SELECT * FROM users";
        $query = mysqli_query($connec, $selectData);

        echo "<div class='table-responsive'><table class ='table table-primary table-striped table-hover table-border'> 
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        ";
        while ($dataArray = mysqli_fetch_assoc($query)) {

          $id = $dataArray["id"];
          $user_name = $dataArray["name"];
          $email = $dataArray["email"];
          $pass = $dataArray["pass"];

          echo "<tr>
                    <td>$id</td>
                    <td>$user_name</td>
                    <td>$email</td>
                    <td>$pass</td>
                    <td>
                    <span class='btn btn-warning'><a href ='edit.php?editid=$id' class ='text-white text-decoration-none'> Edit </a></span>
                    <span class='btn btn-danger'><a href='display.php?deleteid=$id' class='text-white text-decoration-none'>Delete</a></span> 
                    </td>
              </tr>";
        };

        if (isset($_GET["deleteid"])) {
          $deleteid = $_GET["deleteid"];

          $delete = "DELETE FROM users WHERE id = $deleteid";
          if (mysqli_query($connec, $delete) == true) {
            echo "<script>window.location.href='http://localhost:3000/display.php'</script>";
            // replace with your localhost link
          }
        }


        ?>
        <!-- //php end -->
      </div>
    </div>
</body>

</html>