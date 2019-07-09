<?php
include 'dbh.php';
date_default_timezone_set('Asia/Kolkata');
include 'commentdata.php';
?>
<html>
<head>
<link rel="stylesheet" href="commentstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Doubt Clarification</title>
</head>
<body>
<div class="outerbox">
    <h1>Doubt Section</h1>

<?php
 echo "
 <form method='post' action='".setcomments($conn)."'>
 <input type='text' name='uid' placeholder='Name'><br><br>   
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'> 
<textarea name='message' placeholder='Ask your Doubt'></textarea><br><br>
<button name='commentsubmit' type='submit'>Submit</button>
</form>";
    
getcomments($conn)
?>
    </div>
</body>
</html>