<?php


    $conn = mysqli_connect("localhost", "root", "", "project", "3306");
    if (!$conn) {
        echo "Cannot Connect To Database" . mysqli_connect_error($conn);
        exit;
    }
    $hash= password_hash($password, PASSWORD_DEFAULT);
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $cpassword = $_POST['cpsw'];
    $email = $_POST['eml'];

    $query = "INSERT into users(username,password,cpassword, email)values('$username','$hash','$hash','$email');";
    $result = mysqli_query($conn, $query);







if (!$result) {
    echo "Query issue." . mysqli_error($conn);
} else {
    echo "<script>alert('Successfully registered!')
    </script>";
    header("Location: login1.php ");

}
?>