<?php
require_once 'header.php';
echo "<br><span class = 'main'>Welcome to $appname,";
if ($loggedin) echo "$user, you are already logged in.";
else echo 'please signup or log in to proceed';
?>
</span><br><br>
</body>
</html>