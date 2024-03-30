<!DOCTYPE html>
<html>
<head>
    <title>My Website Visitor Information</title>
</head>
<body>
    <h1>Visitor Information</h1>
    <?php
    // Get visitor's IP address
    $ip_address = $_SERVER['REMOTE_ADDR'];
    
    // Display IP address
    echo "<p><strong>Your IP Address:</strong> $ip_address</p>";
    ?>
</body>
</html>
