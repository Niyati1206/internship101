<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




    <title>KJSIEIT-REGISTER</title>
    <style>
        @font-face {font-family: "Harry Potter";
    src: url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.eot");
    src: url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.eot?#iefix") format("embedded-opentype"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.woff2") format("woff2"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.woff") format("woff"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.ttf") format("truetype"),
    url("//db.onlinewebfonts.com/t/0421d4186d6efbfc5331fe180895e780.svg#Harry Potter") format("svg");
}
        .content {
            font-family: Harry Potter, Arial;
            background-image: url('images/try.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            overflow: scroll;
            color: white;


        }
        .container-fluid{
            font-family: Harry Potter, Arial;
        
        }

        .container {
        background-color: rgba(255, 255, 255, 0);

/* 
            margin-top: 50px;
            background-color: #CCFFCC;
            width: max-content;
            height: max-content;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            border-radius: 10px;
            animation: box 0.7s; */

        }

        @keyframes box {
            from {
                opacity: 0;
                transform: rotateY(10px);
            }

            to {
                opacity: 1;
                transform: rotateY(0);
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger navbar-fixed-top">
       
    <div class="container-fluid">
            <a class="navbar-brand" href="#">Proctor Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
    </nav>

    <div class="content">

        <div class="container ">
            <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST' class="row g-3">
                <div class="row g-4">
                    <div class="col">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                            name="Fname" required>
                    </div>
                    <div class="col">
                        <label for="name">Middle Name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                            name="Mname" required>
                    </div>
                    <div class="col">
                        <label for="name">Last Name</label>
                        <input type="textfield" class="form-control" placeholder="Last name" aria-label="Last name"
                            name="Lname">
                    </div>
                    <div class="col">
                        <label for="name">Fathername</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Father name"
                            name="Fathername">
                    </div>
                    <div class="col">
                        <label for="name">Mothername</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Mother name"
                            name="Mothername">
                    </div>

                </div>
                <div class="input-group">
                    <span class="input-group-text">Address</span>
                    <textarea class="form-control" aria-label="With textarea" name="Address"></textarea>
                  </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="City" id="inputCity">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Pincode</label>
                    <input type="number" class="form-control" name="Pincode" id="inputZip">
                </div>
                <br>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Student Mobile Number</label>
                    <input type="number" class="form-control" name="Smobile" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Father Mobile Number</label>
                    <input type="number" class="form-control"name="Fmobile" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Mother Mobile Number</label>
                    <input type="number" class="form-control" name="Mmobile" id="inputZip">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Hobbies</span>
                    <textarea class="form-control" aria-label="With textarea" name="Hobbies"></textarea>
                  </div>
                  <div class="input-group">
                    <span class="input-group-text">Mention Difficulties (if any)</span>
                    <textarea class="form-control" aria-label="With textarea" name="Difficulties"></textarea>
                  </div>
                  <div class="input-group">
                    <span class="input-group-text">Any Suggestion</span>
                    <textarea class="form-control" aria-label="With textarea" name="Suggestion"></textarea>
                  </div>
                
                
                <div class="col-16 mb-3 center">
                    <button type="submit" name="submit" class="btn btn-danger">Save</button>
                </div>

                <div class="col-16 mb-3 center">
                    <button class="btn btn-danger" onclick="log()">Logout</button>
                </div>
            </form>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
         function log(){
            window.location.replace('logout.php');
         }
    </script>


</body>

</html>

<?php

if (isset($_POST) && $_POST) {
    $conn = mysqli_connect("localhost", "root", "", "project", "3306");
    if (!$conn) {
        die("Can't connect to db : " . mysqli_connect_error());
    } else {
        echo "";
    }

    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Lname = $_POST['Lname'];
    $Fathername = $_POST['Fathername'];
    $Mothername = $_POST['Mothername'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Pincode = $_POST['Pincode'];
    $Smobile = $_POST['Smobile'];
    $Fmobile = $_POST['Fmobile'];
    $Mmobile = $_POST['Mmobile'];
    $Hobbies = $_POST['Hobbies'];
    $Difficulties = $_POST['Difficulties'];
    $Suggestion = $_POST['Suggestion'];





    if (empty($Fname)) {
        echo "<script>alert('Please Fill All Fields')
        </script>";
    } else {
        $query = "INSERT INTO proctor(Fname ,  Mname ,  Lname ,  Fathername ,  Mothername ,  Address ,  City ,  Pincode ,  Smobile ,  Fmobile ,  Mmobile ,  Hobbies ,  Difficulties ,  Suggestion ) VALUES ('$Fname', '$Mname', '$Lname', '$Fathername', '$Mothername', '$Address', '$City', '$Pincode', '$Smobile', '$Fmobile', '$Mmobile', '$Hobbies', '$Difficulties', '$Suggestion')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Query issue." . mysqli_error($conn);
        } else {
            echo "<script>alert('Thanks for filling form!')
        </script>";
        }
    }

}

    

?>