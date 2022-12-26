<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script
src="https://code.jquery.com/jquery-3.6.3.js"
integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
crossorigin="anonymous"></script>

</head>

<body>



    <?php
session_start();
if (isset($_SESSION['username'])) {
?>
   <div class="mb-3 row">
   <input id="namess" class="form-control" type="text" placeholder="Enter your name" aria-label="default input example">

   
      
    </div>
    <!-- Button trigger modal -->
    <button  id="submit" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Logout
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="show" class="modal-body show">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="logout.php"><button  type="button" class="btn btn-primary btn-danger">Logout</button></a>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
?>
    <h1> THIS IS NOT LOGGED IN PAGE</h1>
    <?php
}
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

        
<!-- <script  type="text/javascript">
    function store(){
    var inputEmail= document.getElementById("namess");
    localStorage.setItem("namess", inputEmail.value);

    const name = localStorage.getItem('namess');
    console.log(name);
    document.getElementById('show').innerHTML = name;
    }
</script> -->

<script>
    $(document).ready(function(){
        $('#submit').on('click', function(){
            var inputtagvalue = $('#namess').val();
            console.log(inputtagvalue);
            $('.show').html(inputtagvalue);
        })
    })

</script>


</body>

</html>