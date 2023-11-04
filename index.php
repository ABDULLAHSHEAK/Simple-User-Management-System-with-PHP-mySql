<?php
include "db_connec.php";

if(isset($_POST["submit"])){
  $name = $_POST["username"];
  $mail = $_POST["mail"];
  $password = $_POST["password"];

  $insert = "INSERT INTO users(name,email,pass) VALUES ('$name','$mail','$password')";
  $result = mysqli_query($connec, $insert);
  if($result == true){
    echo "Data Insert";
    echo "<script>window.location.href='http://localhost:3000/display.php'</script>"; 
     // replace with your localhost link
  }else{
    echo "Data not Insert";
  }

}


include "insert.php";
?>