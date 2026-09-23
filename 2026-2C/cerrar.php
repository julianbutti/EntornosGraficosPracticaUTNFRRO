<?php

session_start();
unset($_SESSION);
$_SESSION = "";
session_destroy();
?>
Sesión cerrada....
<?php

header("Location: login.php");exit();

?>