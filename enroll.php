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
    
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="about-us.php" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Register now</a>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="p-5 mb-4 bg-light text-center">
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <nav>
			<ul>
				<li>
						<span> <i class="fa-solid fa-calendar-days"></i></span>
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
                        <select class="form-select form-select-lg mb-3 col-lg-6" arial label="">
                            <option selected>--Select your gender--</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </div>
                <p>
                    In order to complete your information to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-week immersion.
                </p>    
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="course" class="form-label"><b>What's your preferred course?</b></label>
                            <select class="form-select form-select-lg mb-3 col-lg-6" arial label="">
                                <option selected>--Select your course--</option>
                                <option value="1">Python</option>
                                <option value="2">Android</option>
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