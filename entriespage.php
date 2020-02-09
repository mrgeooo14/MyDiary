<?php
    $con = mysqli_connect('localhost', 'root', '', 'mydiary',);
    // Check connection
    if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }
$query = "SELECT * FROM entries ORDER BY entry_time desc"; 
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>All diary entries from every user</title>     
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    </head>
<body>
    <header>
        <div class="main">
                <div class="logo">
                    <img src="css/photos/logo.png">
                </div>
                <ul>
                <li class="active"><a href="entriespage.php">Entries</a></li>
                <li><a href="diary.php">Back to Diary</a></li>
                <li><a href="aboutpage.html">About</a></li>
                </ul>
        </div>    
    </header>    
        
        
        
    <table class="table-content">
       <thead>
        <tr>
            <th colspan="3"><h2>Entries</h2></th>
        </tr>       
        
        <tr> 
            <th> Username </th>
            <th> Diary Entry </th>
            <th> Time </th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($rows=mysqli_fetch_assoc($result)){
        ?>        
                <tr>
                    <td><?php echo $rows['userID'] ?></td>
                    <td><?php echo $rows['entry'] ?></td>
                    <td><?php echo $rows['entry_time'] ?></td>
                </tr>
        <?php
            }
        ?>
        <tbody>    
    </table>
</body>
</html>