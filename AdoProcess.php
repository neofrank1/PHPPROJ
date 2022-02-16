<?php 
    include("config.php");
    if (isset($_POST['signup']))
    {
        if ($_POST['password'] != $_POST['conpassword'])  // False no value found //
        {
            echo '<script>alert("Password Does Not Match")</script>';
            header("Location: signup.php");
        }
        else // Getting the Value to stored in Sql //
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $middlename = $_POST['middlename'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $contact = $_POST['contact'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $user_name = $_POST['username'];
            
            $password_encrypt = hash('sha1',$password);

            $sql = "INSERT INTO ADOPTER (ado_user,ado_pass,ado_last_name,ado_first_name,ado_middle_name,ado_address,ado_sex,ado_contact,ado_email,ado_age) 
                    VALUES ('$user_name','$password_encrypt','$lastname','$firstname','$middlename','$address','$sex','$contact','$email','$age')";
            $results = mysqli_query($conn,$sql);

            if($results)
            {
                echo '<script>alert("Complete Sign Up")</script>'; // Successfully inserted //
                require("login.php");
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