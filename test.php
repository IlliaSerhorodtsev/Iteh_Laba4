<?php
session_start();
if (isset($_GET['go'])) {
    Header("Location: test2.php");
}
echo "<h2>WELCOME to the page №1</h2>";
echo $_SESSION['login'];
echo "<br><form><input type=submit name=go value=Go></form>";

?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    body {
        background: #f5e1bf;
    }
</style>

<body>

</body>

</html>