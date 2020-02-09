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
    $password = ($_POST['password']);

    $s = "SELECT * FROM userdb WHERE (userID = '$userID') && (password = '$password')";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        $_SESSION['userID'] = $userID;
        header('location:diary.php');}
    
    else{
      $message3 = "Wrong Information entered, please try again";
      echo "<script> 
                  alert('$message3');
                  window.location.href='index.php';
            </script>";
      exit();;
}
?>