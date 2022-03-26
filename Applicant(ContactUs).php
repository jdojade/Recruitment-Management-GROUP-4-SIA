<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width", initial-scale=1.0>
        <title>Octagon</title>
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/jpg" href="images/octagon.png">
    </head>
    <body>

          <!---Header--->
    <header>
        <a href="index.html"><img src="images/octagon.png"></a>
        <h3 id="name">CTAGON</h3>
        <ul>
            <li><a href="Applicant(Homepage).php">HOME</a></li>
            <li><a href="Applicant(JobList).php">JOB</a></li>
            <li><a href="Applicant(AboutUs).php">ABOUT</a></li>
           <a href= "Applicant(ContactUs).php" class="header-btn" type="submit">Contact Us </a>
        </ul>
        </header>
    <section id="banner" >
        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);  
            })
        </script>
           
    </section>

    <!----------contact-------------->

        <section class="contact" style=" background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/contact.jpg);">
            <div class="content">
                <h2>Contact Us</h2>
                <p>Let us know how we can help you</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Octagon Bldg., <br> Ortigas, Pasig City <br> Main Branch</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+63 123 456 7890</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>octagon.network.hr@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                <form method="post" enctype="multipart/form-data">
                    <?php
                    include "includes/contactUs.inc.php"; 
                    ?>
                    <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="fullName" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="message"></textarea>
                            <span>Type your message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="Submit" name="contactUs" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
<!-----------------footer-------------------->
        <footer>
            <div class="footer-content">
                <h3>OCTAGON</h3>
                <p>
                We are here to support you in the 'new normal'
                As our Filipino and global clients adjust to the “new normal” of working under the COVID-19 pandemic, Octagon is here to support. Our team are all working efficiently from home and are fully operational. We are providing our services without interruption at the same standard that you have always been accustomed to. 
                Therefore, we are here to help you with any recruitment need during and after the crisis. We can answer any questions you may have about COVID and job market trends, remote staffing, virtual teams and regular office-based recruitment to help you ease into the new workplace norms. We are here to be your
                dedicated recruitment partner and consultant during the crisis and beyond. Contact us now or anytime.
                </p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                
                <p>Copyright &copy2020. Designed by <span>OCTAGON</span></p>
            </div>

        </footer> 
    </body>
</html>