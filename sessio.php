<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "First name is " . $_SESSION["fname"] . ".<br>";
echo "Last name is " . $_SESSION["lname"] . ".";
?>

</body>
</html>
