<?php 
    include("config.php");
    if (isset($_POST['signup']))
    {
        if ($_POST['password'] != $_POST['conpassword'])  // False no value found //
        {
            echo '<script>alert("Password Does Not Match")</script>';
            header("Location: staff.php");
        }
        else // Getting the Value to stored in Sql //
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $middlename = $_POST['middlename'];
           // $email = $_POST['email']; //
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $contact = $_POST['contact'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $user_name = $_POST['username'];
            
            $password_encrypt = hash('sha1',$password);

            $sql = "INSERT INTO STAFF (staff_user,staff_pass,staff_firstname,staff_middlename,staff_lastname,staff_address,staff_sex,staff_contact,staff_age) 
                    VALUES ('$user_name','$password_encrypt','$firstname','$middlename','$lastname','$address','$sex','$contact','$age')"; //'$email',//
            $results = mysqli_query($conn,$sql);

            if($results)
            {
                echo '<script>alert("Complete Staff Added")</script>'; // Successfully inserted //
                require("adminhome.php");
                mysqli_close($conn);
            }
            else
            {
                echo '<script>alert("Something Wrong on the Query")</script>'; // Query Problem //
            }
        }
    }
    else
    {
        include("login.php");
    }
?>