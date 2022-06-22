<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['subscribeButton']))
{
    //1. fetch from data
    $email = $_POST['email'];
    //2. Submit from data

    $insertData = mysqli_query($conn, "INSERT INTO subscribers(email) VALUES('$email')");

    if($insertData)
    {
        echo "Thank You for Subscribing";
    }
    else{
        echo "Error Occurred";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- navigation bar here -->
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="about-us.php" class="nav-link active">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation bar here -->
    <div class="container">
    <div class="row pt-5 bg-light"> 
        <h1>About Us</h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam neque, excepturi libero sint fuga eius dolores! Natus, dolore. Tenetur commodi recusandae architecto dolore, distinctio deserunt nemo hic quasi voluptates dolores.
        </p>
    </div>
    </div>
    <div class="container">
        <div class="row pt-5"> 
            <div class="col-lg-6">
                <h1>Our Program</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, quod dicta. Quos dicta voluptatibus commodi provident? Aperiam labore aspernatur nulla!
                </p>
            </div> 
            <div class="col-lg-6">
                <img src="images/photo.jpg" alt="" class="img-fluid rounded">
            </div>  
        </div>
    </div>
    <div class="container">
    <h1>The Programs</h1>
    <div class="row pt-5">
        <div class="col-lg-4">
          <div class="card text-center shadow">
            <div class="card-body">
              <h5 class="card-title">Skill Discovery</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, quos!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center shadow">
            <div class="card-body">
              <h5 class="card-title">Upskilling Program</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, alias.</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ">
            <div class="card text-center shadow">
              <div class="card-body">
                <h5 class="card-title">Path Finding Program</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, alias.</p>
                <a href="#" class="btn btn-primary">View Details</a>
              </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row text-center">
    <h2 class="fw-lighter"> Subscribe to get information, latest news about Zalego Academy</h2>
    </div>   
    <br>
    <form action="about-us.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Your email address">
            </div>
            <div class="col-md-6">    
                <button type="submit" name="subscribeButton" class="btn btn-primary">Subscribe</button>  
            </div>
        </div>
    </form>
    </div>
    <hr>
        <footer>
        &copy; Company 2022
        </footer>




        <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>