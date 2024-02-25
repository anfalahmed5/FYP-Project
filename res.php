<?php
session_start();

if (isset($_POST['logout'])) {
    // Destroy the session
    // session_destroy();
    unset($_SESSION['uid']);

    $_SESSION["loggedin"] = false;
    // Redirect to the same page
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Check if the user is logged in, if not, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sign.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Agreement.pk</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
   

        <!-- Favicon -->
        <link href="img/logo1.png" sizes="76x76" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
     <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo1.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>10:00 AM- 06:00 PM</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2>+92 309 3932341</h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                            <a href="#" class="navbar-brand" style="height: auto; width:50%;"><img src="img/logo1.png" alt="Logo" style="height: auto; width: 100%;"></a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto"> 
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>      
                            <a href="portfolio.php" class="nav-item nav-link">Services</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>      
                            </div>
                        </div>
                            <div class="navbar_right">
                            <?php if (!isset($_SESSION['uid'])) {?>
                                <button class="btn nav-item nav-link" id="navbarCollapse">
                                <a href="sign.php">Sign In</a>
                                </button>
                            <?php } 
                            else{ ?>
                            <div class="profile collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="icon_wrap">
                                <span class="name" style="color: #aa9166;font-size: 30px;"><?php echo $_SESSION['username'] ?></span>
                                    <i class="fas fa-chevron-down"></i>
                            </div>
                                <div class="profile_dd" id="logoutform">
                                <ul class="profile_ul">
                                    <li>
                                    <form method="post">
                                    <button type="submit" name="logout" value="Logout">
                                    <a class="logout"  id = "logout"  ><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
                                    </button>
                                    </form>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        </nav>
                    </div>
                </div>
            <!-- Nav Bar End -->
  
            <!-- Contact Start -->
            <div class="res">
                <div class="container">
                    <!-- <div class="section-header">
                        <h2>Contact Us</h2>
                    </div> -->
                    <div class="row">
                            <div class="col-md-6 res-text text-center">
                              <?php 
                                $file_contents = $_GET['file_contents'];
                              ?>
                                <a class="btn" href="cust.php?file_contents=<?php echo urlencode($file_contents); ?>">Customize</a>
                            </div>
                            <div class="col-md-6 res-text text-center"> 
                                <a class="btn" href="#" onclick="downloadPDF()" title="submit" >Save/Print</a>
                            </div>

                     
                    </div>
                </div>
            </div>
            <!-- Contact End -->

            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>About Us</h2>
                                <p>
                                "Agreement.pk" may be a platform that makes it easier to create, administer, or store agreements if it is connected to legal agreements or papers. In that scenario, the platform may provide resources for law, manage contracts, and create legally enforceable papers.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="portfolio.php">Civil Law</a>
                                <a href="portfolio.php">Family Law</a>
                                <a href="portfolio.php">Business Law</a>
                                <a href="portfolio.php">Education Law</a>
                                <a href="portfolio.php">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.php">About Us</a>
                                <a href="portfolio.php">Practices</a>
                                <a href="portfolio.php">Attorneys</a>
                                <a href="portfolio.php">Case Studies</a>
                                <a href="contact.php">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Qasimabad, Hyderabad, Pakistan</p>
                                <p><i class="fa fa-phone-alt"></i>+92 309 3932341</p>
                                <p><i class="fa fa-envelope"></i>Agreement.pk.info@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
     </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
<script >
            $(".profile .icon_wrap").click(function () {
            $(this).parent().toggleClass("active");
            });
            // $(document).on("click","#logoutform", "#logout", function(){
            //     session_abort();
            //     window.location = "index.php";
            // });
            function logoutFunction() {
                <?php $_SESSION['uid']==''?>
                location.reload();
    }

        </script>
<script>
    function sendMessage() {
        // This function could be used to send a message (not functional in HTML/CSS alone)
        // You'd need JavaScript or a server-side language for message handling.
        // alert("This is a static example. Functionality requires programming beyond HTML/CSS.");
    }
</script>
<script>
        function getUrlParameter(name) {
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(window.location.href);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function downloadPDF() {
    // Get text content from the text editor
    console.log("working");

    const fileName = getUrlParameter('file_contents');
    console.log(fileName); // Corrected variable name to fileName

    if (fileName) {
        // Fetch the file contents
        fetch(fileName)
            .then(response => response.text())
            .then(text => {
                // Create a form and add text content
                var form = document.createElement('form');
                form.action = 'generate_pdf.php'; // This is where the form will be submitted
                form.method = 'post';

                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'htmlContent'; // Change to 'htmlContent' to reflect that you're passing HTML content
                input.value = text; // Pass the HTML content of the file

                form.appendChild(input);
                document.body.appendChild(form);

                // Submit the form to trigger the download
                form.submit();

                // Remove the form from the DOM
                document.body.removeChild(form);
            })
            .catch(error => console.error('Error fetching file:', error));
    }
}

</script>