<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submitButton']))
{
    //1. fetch from data
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $message = $_POST['message'];
    //2. Submit from data
    $insertData = mysqli_query($conn, "INSERT INTO contactus(firstname, lastname, email, phonenumber, message) VALUES('$firstName', '$lastName', '$email', '$phone', '$message')");

    if($insertData)
    {
        echo "Data Submitted Successfully";
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
    <title>Bootstrap Grid Layout</title>
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
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End navigation bar here -->
    <main class="p-5 mb-4 bg-light">
        <h1>Welcome, Esther Kagai</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt et assumenda similique, numquam eveniet quo deleniti blanditiis iure consequuntur laudantium amet, delectus tempore vel ducimus impedit doloremque odio! Hic, veritatis.
        </p>
        <button class="btn btn-primary">Learn More</button> 
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>Header 1</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat aut fuga in quaerat blanditiis earum modi ab! Consectetur nobis eaque tempore. Tempora corporis nobis incidunt hic inventore maiores eum perspiciatis harum perferendis voluptatibus velit veritatis ab sit placeat, soluta labore ducimus totam similique dolor temporibus exercitationem quaerat eos. Ipsa, velit!
                </p>
                <button class="btn btn-primary">Learn More</button>
            </div>
            <div class="col-lg-4">
                <h1>Header 2</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat aut fuga in quaerat blanditiis earum modi ab! Consectetur nobis eaque tempore. Tempora corporis nobis incidunt hic inventore maiores eum perspiciatis harum perferendis voluptatibus velit veritatis ab sit placeat, soluta labore ducimus totam similique dolor temporibus exercitationem quaerat eos. Ipsa, velit!
                </p>
                <button class="btn btn-primary">Learn More</button>
            </div>
            <div class="col-lg-4">
                <h1>Header 3</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat aut fuga in quaerat blanditiis earum modi ab! Consectetur nobis eaque tempore. Tempora corporis nobis incidunt hic inventore maiores eum perspiciatis harum perferendis voluptatibus velit veritatis ab sit placeat, soluta labore ducimus totam similique dolor temporibus exercitationem quaerat eos. Ipsa, velit!
                </p>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
        <!-- contact us from here -->
        <form action="index.php" method="POST">
        <div class="row pt-5                                                                                                                                                                                                                                                                                                                                                                        ">
            <h1>Contact Us</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam neque, excepturi libero sint fuga eius dolores! Natus, dolore. Tenetur commodi recusandae architecto dolore, distinctio deserunt nemo hic quasi voluptates dolores.
            </p>
            <form>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter your first name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter your last name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your E-mail address">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="text" name="phonenumber" class="form-control" placeholder="Enter your phone number">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div> 
                <br>   
                    <button type="submit" name="submitButton" class="btn btn-primary">Send a message</button>
            </form>
        </div>
        <!-- End contact us from here -->
        <hr>
        <footer>
        &copy; Company 2022
        </footer>
    </div>



    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>