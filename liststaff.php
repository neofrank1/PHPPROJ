<!DOCTYPE html>
<?php include("config.php");
if (!isset($_SESSION)) {
    session_start();
    if (!$_SESSION['username']) {
        echo "<script>alert('Session Done')</script>";
        header("Location: index.php");
    }
}?>


<body style="background-color: aquamarine;">
    <?php include("headerAD.php"); ?>
    <br>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="table-responsive">
            <table class="table table-success table-striped mx-auto w-auto">
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php
            $sql = "SELECT * FROM STAFF;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if ($resultcheck > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['staff_id'] . "</td>";
                    echo "<td>" . $row['staff_firstname'] . "</td>";
                    echo "<td>" . $row['staff_lastname'] . "</td>";
                    echo "<td>" . $row['staff_address'] . "</td>";
                    echo "<td>";
                    echo '<a href="updatepage.php?id=' . $row['staff_id'] . '" <button type="button" class="btn btn-success btn-sm">Update</button></a>';
                    echo '<a href="delete.php?del=' . $row['staff_id'] . '" <button type="button" class="btn btn-danger btn-sm">Delete</button></a>';
                    echo "</td";
                    echo "<tr>";
                }
            } else {
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
            ?>
            </table>
        </div>
    </div>
    <?php mysqli_close($conn); ?>
</body>