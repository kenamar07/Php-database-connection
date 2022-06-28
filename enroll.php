<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submitButton']))
{
    //1. fetch from data
    $fullName = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    //2. Submit from data
    $insertData = mysqli_query($conn, "INSERT INTO enrollment(fullname, phonenumber, email, gender, course) VALUES('$fullName', '$phone', '$email', '$gender', '$course')");

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
    
    <?php include('navbar.php') ?>
    
    <main class="p-5 mb-4 bg-light text-center">
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <nav>
			<ul>
				<li>
						<span class="fa fa-calendar"></span>
						<span>20th July 2022</span>
				</li>
				<li>
						<span> <i class="fa-solid fa-location-dot"></i></span>
						<span>Zalego Academy, <br> Devan Plaza</span>
				</li>
			</ul>
		</nav>
    </main>

    <div class="container">
    <form method="POST">
        <div class="row pt-5"> 
            <div class="text-center">
            <p>
                Looking for a place to kickstart your career in Technology?
                Whether you're a local, new in town or just cruising through we've got loads of great tips and events for you
            </p>                                                                                                                                                                                                                                                                                                                                                                   ">
            <h1>Sign up today?</h1>
            </div>
            
            <form>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label"><b>Full Name</b></label>
                        <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                        <input type="text" name="phonenumber" class="form-control" placeholder="+2547......">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label"><b>Email Address</b></label>
                        <input type="text" name="email" class="form-control" placeholder="Please enter your email">
                    </div>
                    
                    <div class="mb-3 col-lg-6">
                        <label for="gender" class="form-label"><b>What's your gender?</b></label>
                        <select class="form-select form-select-lg mb-3 col-lg-6" arial label="" name="gender">
                            <option selected>--Select your gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <p>
                    In order to complete your information to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-week immersion.
                </p>    
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="course" class="form-label"><b>What's your preferred course?</b></label>
                            <select class="form-select form-select-lg mb-3 col-lg-6" arial label="" name="course">
                                <option selected>--Select your course--</option>
                                <option value="python">Python</option>
                                <option value="android">Android</option>
                            </select>
                    </div>
                </div> 
                <p>
                    You agree by providing your information you understand all our data privacy and protection policy outlined in our terms & conditions and the Privacy Policy statements.
                </p>
                <br> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label"><b>Agree Terms and Conditions</b></label>
                </div>
                <br>
                <br>
                <div class="col-lg-6"> 
                    <button type="submit" name="submitButton" class="btn btn-primary">submit application</button>
                </div>
            </form>
                <br>
                <br>
                <hr>
                <div class="row text-center">
                    <h2 class="fw-lighter"> Subscribe to get information, latest news about Zalego Academy</h2>
                </div>   
                <form method="POST">
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
    </div>



    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>