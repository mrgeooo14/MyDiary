<?php
    $con = mysqli_connect('localhost', 'root', '', 'mydiary',);
    // Check connection
    if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }
    session_start();
    mysqli_select_db($con, 'mydiary');

    $userID = ($_POST['userID']);
    $email  = ($_POST['email']);
    $password = ($_POST['password']);
    

    $s = "SELECT * FROM userdb WHERE (userID = '$userID')";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){
      $message2 = "User is already registered, please try a different username!";
      echo "<script>
      alert('$message2');
      window.location.href='index.php';
      </script>";
      exit();
    }
    
    else{
    $reg = "INSERT INTO userdb (userID, password, email) VALUES('$userID', '$password', '$email')";
    mysqli_query($con, $reg);
    $message = "Successfully registered, please login now.";
    echo "<script>
    alert('$message');
    window.location.href='index.php';
    </script>";
    exit();

}
?>