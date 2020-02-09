<?php
$con = mysqli_connect('localhost', 'root', '', 'mydiary',);
// Check connection
if ($con -> connect_errno) {
echo "Failed to connect to MySQL: " . $con -> connect_error;
exit();
}
session_start();
mysqli_select_db($con, 'mydiary');
$userID = $_SESSION['userID'];

if(isset($_POST['save_entry']))
{
        $entry = ($_POST['new_entry']);
        if(($_POST['new_entry']) != "Dear Diary,"){

        $s = $con->query("INSERT INTO entries (userID, entry) VALUES('$userID', '".$entry."')");
        echo "Diary Entry successfully submitted";
    }
}
header('location:diary.php');
?>

