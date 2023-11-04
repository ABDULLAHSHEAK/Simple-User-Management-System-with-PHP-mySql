<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    <?php include "style.css" ?>
  </style>
</head>

<body>
  <section class="vh-100 bg-image" ;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <form action="" method="POST">

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Username" name="username" required />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Enter Your Email" name="mail" required />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="Enter Password" name="password" required />
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" value="Submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">See All Users <a href="display.php" class="fw-bold text-body btn btn-success text-white text-decoration-none"><u>Click Here</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>