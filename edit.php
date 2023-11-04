<?php
include "db_connec.php";
if ($_GET['editid']) {
  $editId = $_GET['editid'];

  $selectData = "SELECT * FROM users WHERE id = $editId";
  $start    = mysqli_query($connec, $selectData);

  $data     = mysqli_fetch_assoc($start);
  $id       = $data['id'];
  $userName = $data['name'];
  $email    = $data['email'];
  $password = $data['pass'];
}

if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $username = $_POST['username'];
  $email = $_POST['mail'];
  $password = $_POST['password'];

  $updateData = "UPDATE users SET name = '$username', email = '$email', pass = '$password'  WHERE id = '$id' ";
  $my    = mysqli_query($connec, $updateData);
  if ($my == true) {
    header('location:display.php');
    echo "Data updated";
  } else {
    echo $updateData . "Data not updated";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Edit Page</title>
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
  <section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Edit Data</h2>

                <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Username" name="username" value="<?php echo $userName ?>" required />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Enter Your Email" name="mail" value="<?php echo $email ?>" required />
                  </div>

                  <div class="form-outline mb -4">
                    <input type="password" class="form-control form-control-lg" placeholder="Enter Password" name="password" value="<?php echo $password ?>" required />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Password" name="id" value="<?php echo $id ?>" required hidden />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="edit" value="Submit" class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body">Save</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>