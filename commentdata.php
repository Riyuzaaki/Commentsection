<?php
function setcomments($conn)
{
    if(isset($_POST['commentsubmit']))
    {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments(uid, date, message) VALUES('$uid','$date','$message');";
        $result = mysqli_query($conn,$sql);
    }
    
}

function getcomments($conn)
{
    $sql = "SELECT * FROM comments;";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
  { echo "<div class = 'comment-style-box'>";
    echo "<div class = 'commentusername'>";
    echo "<i class='fa fa-user'></i>  ".$row['uid']."<br>";
    echo "</div>";
    echo "<div class = 'commentdate'>";
    echo $row['date']."<br>";
    echo "</div>";
    echo "<div class = 'commenmessage'>";
    echo nl2br($row['message'])."<br><br>";
    echo "</div>";
    echo "</div>";
    }
}
?>