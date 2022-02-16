<!DOCTYPE html>
<?php
include("config.php");
if (!isset($_SESSION)) {
    session_start();
    if (!$_SESSION['username']) {
        echo "<script>alert('Session Done')</script>";
        header("Location: index.php");
    }
}
?>

<html>
    <body>
        <?php include("headerA.php");?>
        <?php include("footer.php");
            mysqli_close($conn);?>
    </body>
</html>