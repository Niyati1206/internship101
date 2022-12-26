<!DOCTYPE html>
<html>
<head>

<style>
 @font-face {font-family: "Harry Potter";
    src: url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.eot");
    src: url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.eot?#iefix") format("embedded-opentype"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.woff2") format("woff2"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.woff") format("woff"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.ttf") format("truetype"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.svg#Harry Potter") format("svg");}
      
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  
  /* background-color: #fff; */
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  font-family: Harry Potter, Arial;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: Harry Potter, Arial;
  /* font-family: "Roboto", sans-serif; */
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
<title> Login </title>

</head>
<body>
  <body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form">
          <input type="text" placeholder="Enter Username" name="uname" required/>
          <input type="password" placeholder="Enter password" name="psw" required/>
          <button type="submit" name="submit">login</button>
          <p class="message">Not registered? <a href="createuser.php">Create an account</a></p>
        </form>
      </div>
    </div>
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</body>
</html>

<?php

session_start();
if (isset($_POST) && $_POST) {
    $conn = mysqli_connect("localhost", "root", "", "project", "3306");
    if (!$conn) {
        die("Can't connet to db : " . mysqli_connect_error());
    }
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    // $email = $_POST['eml'];
    
    
     $query = "SELECT username, password FROM users WHERE username='$username'";
     $result = mysqli_query($conn, $query);
     $row= mysqli_fetch_assoc($result);

    //  password_verify($password, $row['password'])
    $valid= password_verify($password, $hash);

    if(!$row){
      echo "<script>alert('Empty Data!');
          </script>;";
  } else if ($username != $row['username'] and !$valid) {
    echo "<script>alert('Enter correct data');
    </script>;";} else {
    
    $_SESSION['username'] = $username;
      header("Location: proctor.php");
    }
      
      
  }

//     if (empty($username)|| empty($password) ) {
//         echo "<script>alert('Please Fill All Fields')
//         </script>";
//     } else
//         if (!$result){
//             echo "<script>alert('Enter correct username!')</script>";
        
           
//             if (!$result) {
//                 echo "Query issue." . mysqli_error($conn);
//             } else {
//                 echo "<script>alert('Login successfull!')
//         </script>";
//             }
//         }else {
//             echo "<script>alert('Error:Fill again')
//         </script>";
//         }
// }
?>