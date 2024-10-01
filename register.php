<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" style="display: none;" id="registrationForm">
        <h2>Registration</h2>
        <form action="#" method="post">
            <input type="text" id="fullname" name="name" placeholder="Name" required oninput="validateFullname('regFormType')">
            <!-- <input type="text" id="usn" name="usn" placeholder="USN" required oninput="validateUsername('regFormType')"> -->
            <!-- <input type="text" id="class" name="class" placeholder="Class" required> -->
            <input type="email" id="email" name="email" placeholder="Email" required oninput="validateEmail('regFormType')">
            <input type="password" id="password" name="password" placeholder="Password" required oninput="validatePassword('regFormType')">
            <input type="password" id="confirm" name="conPassword" placeholder="Confirm Password" required>
            <button type="submit" name="register">Register</button>
            <p id="regFormType" style="color:red;"></p>
        </form>

        <p class="switch-form">Already have an account? <a href="#" id="switchToLogin">Login here</a></p>
    </div>
<?php
    if (isset($_POST['register'])) {
        include("config.php");

        $email = $_POST['email'];
        $sql = "select * from tbl_user where email='$email'";
        $result = mysqli_query($con, $sql);
        $count = mysqlI_num_rows($result);

        if ($count > 0) {
            echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
            echo "<script> location.href='login.php'; </script>";
        } else {
            $name = $_POST['name'];
            $usn = $_POST['usn'];
            $class = $_POST['class'];
            $password = $_POST['password'];
            $conPassword = $_POST['conPassword'];

            if (!preg_match('/^[A-Za-z\s]+$/', $name)) {
                echo "<script>alert('Only alphabets & spaces are allowed!')";
                echo "<script>window.location.href='login.php';</script>";
            }
            if (!preg_match('/^[a-zA-Z0-9]+$/', $usn)) {
                echo "<script>alert('USN can only contain letters and numbers.')";
                echo "<script>window.location.href='login.php';</script>";
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Invalid email format');</script>";
                echo "<script>location.href='login.php';</script>";
            }
            if ($password !== $conPassword) {
                echo "<script>alert('Password Does not match!');</script>";
                echo "<script> location.href='login.php'; </script>";
            }
            $query = "INSERT INTO tbl_user(name,email,password) VALUES('" . $name . "','" . $email . "','" . $password . "')";
            mysqli_query($con, $query);
            echo "<script>alert('Registeration Completed, Please Login.');</script>";
            //echo "<script> location.href='login.php'; </script>";
        }
    }
    ?>
</body>
</html>