<?php
    session_start();
    if(!isset($_SESSION['userID'])){
        header('location:index.php');    
        echo '<script language="javascript">';
        echo 'alert("Not logged in,please try again!")';
        echo '</script>';
    }
?>

<html>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>My Diary</title>
        <head>
            
            <link rel="stylesheet" type="text/css" href="css/style2.css">
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script> -->
        </head>
    <body>
        <header>
        <div class="main">
                <div class="logo">
                    <img src="css/photos/logo.png">
                 </div>
                <ul>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="entriespage.php">Entries</a></li>
                <li><a href="aboutpage.html">About</a></li>
                </ul>
        </div>    
        </header>
            <form method="post" action="save_entry.php">
            <div class="text-container">
                    <link rel="stylesheet" type="text/css" href="css/diarystyle.css">
                    <p><?php echo"WELCOME $_SESSION[userID], FEEL FREE TO WRITE"?></p>
                    <textarea name="new_entry" spellcheck="false";>Dear Diary,</textarea>
                    <input type="submit" name="save_entry" class="save_entry" value="Save Entry">
                </div>
            </form>
    </body>
</html>