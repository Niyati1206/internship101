<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {font-family: "Harry Potter";
    src: url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.eot");
    src: url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.eot?#iefix") format("embedded-opentype"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.woff2") format("woff2"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.woff") format("woff"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.ttf") format("truetype"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.svg#Harry Potter") format("svg");}

    
        /* Bordered form */
        form {
            /* background-image: url('images/this.jpg'); */
            font-family: Harry Potter, Arial;
            border: 3px solid #f1f1f1;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            font-family: Harry Potter, Arial;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=text],
        input[type=email] {
            font-family: Harry Potter, Arial;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            font-family: Harry Potter, Arial;
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
            
            
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* The "Forgot password" text
        span.psw {

            float: right;
            padding-top: 16px;
        } */

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST' class="row g-3">
    <div class="pooraform">
        <div>
           <h1><center>Register</center> </h1>
        </div>
       
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <label for="cpsw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm password" name="cpsw" required>

            <label for="eml"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="eml" required>

            <button onclick="pop()" type="submit">Register</button>
            



        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn" onclick="myFunc()">Cancel</button>
            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
        </div>

        <script>
         function myFunc(){
            window.location.href="index1.php";
         }
    </script>
    </div>
    </form>

  
</body>

</html>
<?php

if (isset($_POST) && $_POST) {
    $conn = mysqli_connect("localhost", "root", "", "project", "3306");
    if (!$conn) {
        die("Can't connet to db : " . mysqli_connect_error());
    }
    
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    $cpassword = $_POST['cpsw'];
    $email = $_POST['eml'];


    if (empty($username) ||  empty($email) || empty($password) || empty($cpassword) ) {
        echo "<script>alert('Please Fill All Fields')
        </script>";
    } else
    if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $hash1 =password_hash($cpassword, PASSWORD_DEFAULT);
            $query = "INSERT INTO users(username,email, password,cpassword) VALUES('$username','$email','$hash','$hash1');";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                echo "Query issue." . mysqli_error($conn);
            } else {
                echo "<script>alert('Succesfully Registered! Please fill the login form')
                window.location.replace('login1.php');
        </script>";
        
            }
        } else {
            echo "<script>alert('Please fill same passwords')
        </script>";
        }
}
?>
