<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0"> 
    <title>Octagon</title>
    <link rel="stylesheet" href="css/style.css">
    <!------>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="icon" type="image/jpg" href="images/octagon.png">
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scrollReveal.min.js"></script>


    </head>
<body style="background-color: #f2f3f4;">
    <!---Header--->
    <header>
        <a href="index.html" ><img src="images/octagon.png"></a>
        <h3 id="name">CTAGON</h3>
            <ul>
            <li><a href="Applicant(Homepage).php">HOME</a></li>
            <li><a href="Applicant(JobList).php">JOB</a></li>
            <li><a href="Applicant(AboutUs).php">ABOUT</a></li>
           <a href= "Applicant(ContactUs).php" class="header-btn" type="submit">Contact Us </a>
            </ul>
        </header>
    <section id="banner" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(images/bg.jpg)" >
        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);  
            })
        </script>
            <div class="text-box">
                <h2 data-scroll-reveal="enter from bottom after 0.2s">You're in good hands</h2>
                <p data-scroll-reveal="enter from bottom after 0.4s">Infinite possibilities is on your way</p><br>
                <a data-scroll-reveal="enter from bottom after 0.6s"   href="Applicant(JobList).php" class="btn-1">Get Started</a>
            </div>
    </section>
        <!---About us--->
        <section class="about" >
            <div class="content-section">
                <div class="content">
                   <h3 data-scroll-reveal="enter from right after 0.5s">Company’s Responsibility </h3>
                    <p data-scroll-reveal="enter from right after 0.4s"> To develop and manage value-added human resources policies and programs, and provide expert consultation, services and solutions in an efficient and customer-focused manner; and to provide our employees with the tools necessary to meet our customers' needs. We are committed to the fair selection and development of our diverse workforce.
                    </p>
               
                    </div>
                </div>
            <div class="image-section" data-scroll-reveal="enter from left after 0.5s" >
                <img src="images/employers.jpg" />
            </div>
            <div class="content-section1">
                <div class="content1">
                    <h3 data-scroll-reveal="enter from left after 0.6s">Employee’s Responsibility</h3>
                        <p data-scroll-reveal="enter from left after 0.4s"> Each employee in a company, whether hourly or salaried, at an entry-level position or in upper management, operates daily based on a specific job description for their position. It is the employee's responsibility to perform the duties of that position to the best of their ability while adhering to company policies and protocols. Workers should address management with any questions or problems they encounter and work for the good of the company.
                        </p>
               
            </div>
        </div>
            <div class="image-section1"data-scroll-reveal="enter from right after 0.6s">
                <img src="images/seeker.jpg" />
            </div>
        </section>
         <!---featured jobs--->

         <section class="featured-jobs">
             <div class="featured-jobs-title">
                <h1 data-scroll-reveal="enter from bottom after 0.3s">featured jobs</h1>
                <p data-scroll-reveal="enter from bottom after 0.4s">We believe that good will never suffice. That's why we're the industry leader in forming high-performing teams and achieving outstanding business results. We never back down from a challenge, much like these athletic winners. We take on our clients' business difficulties head on and assist them in transforming to new levels of success.
                </p>
             </div>

             <div class="featured-jobs-content" data-scroll-reveal="enter from bottom after 0.4s">
                <div class="image">
                    <img src="images/csr.jpg" />
                    <div class="image-info">
                        <h1>customer support</h1>
                        <h2>Representative</h2>
                    </div>
                </div>

                <div class="image">
                    <img src="images/tsr.jpg" />
                    <div class="image-info">
                        <h1>Technical Support</h1>
                        <h2>Representative</h2>
                    </div>
                </div>

                <div class="image">
                    <img src="images/trainer.jpg" />
                    <div class="image-info">
                        <h1>trainer</h1>
                        <h2>team supervisor</h2>
                    </div>
                </div>

                <div class="image">
                    <img src="images/qa.jpg" />
                    <div class="image-info">
                        <h1>Quality Assurance</h1>
                        <h2>Coach</h2>
                    </div>
                </div>
                <div class="image">
                    <img src="images/trainer.jpg" />
                    <div class="image-info">
                        <h1>And More</h1>
                        <h2>Job Offers</h2>
                    </div>
                </div>
                <div class="image">
                    <img src="images/apply.jpg" />
                    <div class="image-info">
                        <h1>Apply</h1>
                        <h2>Now</h2>
                        <a href="Applicant(JobList).php" class="apply-btn">Click Here</a>
                    </div>
                </div>
             </div>
             
       </section>

       <section class="promotion">
            <h1 data-scroll-reveal="enter from bottom after 0.4s">let's work together</h1>
            <p data-scroll-reveal="enter from bottom after 0.4s">Because we believe in offering an inclusive, supportive, and exciting work environment for our teams all over the world, we are able to attract and retain the top people in the industry.</p>
            <a href="Applicant(JobList).php" class="apply-btn" data-scroll-reveal="enter from bottom after 0.5s">APPLY</a>
       </section>



         
<!---------carousel------------->
        <section class="slider-section"  data-scroll-reveal="enter from bottom after 0.2s"> 
            <div class="header">
                <h1>Testimonials</h1>
            </div>
    
            <div class="slider">
                <div class="slider-wrapper flex">
                    <div class="slide flex">
                        <div class="slide-image slider-link prev" data-scroll-reveal="enter from bottom after 0.4s"><img src="images/emp1.jpg"><div class="overlay"></div></div>
    
                        <div class="slide-content" data-scroll-reveal="enter from bottom after 0.4s">
                            <div class="slide-date">June 2021</div>
                            <div class="slide-title"> ALLAN PIERCE<br>@pierceallan@gmail.com</div>
                            <div class="slide-text">“It’s a company that<br>offers you diverse<br>professional experience.”</div>
                            <div class="slide-more">Customer Service Operation Manager</div>
                        </div>
                    </div>
                    <div class="slide flex">
                        <div class="slide-image slider-link next"><img src="images/emp2.jpg"><div class="overlay"></div></div>
                        <div class="slide-content">
                            <div class="slide-date">30.01.2021.</div>
                            <div class="slide-title">CHARLES AVERY <br> @doglover</div>
                            <div class="slide-text">There's no purer form of love <br> than the kind you get from  <br>your four-legged family. <br> "Happiness is a warm puppy." </div>
                            <div class="slide-more">OIL PAINTING</div>
                        </div>
                    </div>
                    <div class="slide flex">
                        <div class="slide-image slider-link next"><img src="images/emp3.jpg"><div class="overlay"></div></div>
                        <div class="slide-content">
                            <div class="slide-date">31.03.2021.</div>
                            <div class="slide-title">ALLIE CALHOUN <br> @pretty_gurl</div>
                            <div class="slide-text">“The best love is the kind that <br>awakens the soul; that makes us<br> reach for  more,and brings <br>us peace to our minds.” </div>
                            <div class="slide-more">FINGER PAINTING</div>
                        </div>
                    </div>
                   
                </div>
                <div class="arrows">
                    <a href="#" title="Previous" class="arrow slider-link prev"></a>
                    <a href="#" title="Next" class="arrow slider-link next"></a>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
            <script src="js/explore-js.js"></script>
    
<!------------------------------------------------------------------------------------------------->

<!-----------our team------------------------------------>
<h1 id="team" data-scroll-reveal="enter from bottom after 0.4s"> Our Developer Team</h1>
<section class="our-team">
<div class="container" data-scroll-reveal="enter from bottom after 0.4s">
    <div class="card">
        <div class="card-content" >
            <div class="imgBx">
                <img src="images/daniel.jpg" alt="">
            </div>
            <div class="contentBx">
                <h4>Daniel Marie Linasan</h4>
                <h5>Lead Technical Writer</h5>
            </div>
            <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="imgBx">
                <img src="images/denice.jpg" alt="">
            </div>
            <div class="contentBx">
                <h4>Denice Klaire Villareal</h4>
                <h5>Project Mannager</h5>
            </div>
            <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="imgBx">
                <img src="images/jade.jpg" alt="">
            </div>
            <div class="contentBx">
                <h4>Jade Oloroso</h4>
                <h5>Lead Programmer</h5>
            </div>
            <div class="sci">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <a href="Applicant(AboutUs).php" class="view-btn">VIEW MORE</a>
</div>
</section>

<!-------------------------------------------------------------->

        <!---Contacts--->
        <!-- <section class="cta">
            <h1>Enroll for our various online courses</h1>            
            <p>Work with us and refer your friend, colleague, or cousin to an active opportunity at TalentumPH. <br>
                You can earn up to $500.00 if we fill the position—it’s that simple.</p>
            <a href="" class="btn-1">Contact us</a>
        </section> -->
              
<footer >
    <div class="footer-content"  data-scroll-reveal="enter from bottom after 0.4s">
        <h3 >OCTAGON</h3>
        <p>
        We are here to support you in the 'new normal'
        As our Filipino and global clients adjust to the “new normal” of working under the COVID-19 pandemic, Octagon is here to support. Our team are all working efficiently from home and are fully operational. We are providing our services without interruption at the same standard that you have always been accustomed to. 
        Therefore, we are here to help you with any recruitment need during and after the crisis. We can answer any questions you may have about COVID and job market trends, remote staffing, virtual teams and regular office-based recruitment to help you ease into the new workplace norms. We are here to be your
        dedicated recruitment partner and consultant during the crisis and beyond. Contact us now or anytime.
        </p>
        <div class="social-links"   data-scroll-reveal="enter from bottom after 0.4s">
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-google"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></span></a></li>
        </div>
    </div>
    <div class="footer-bottom" >
        
        <p  data-scroll-reveal="enter from bottom after 0.4s">Copyright &copy2021. Designed by <span>OCTAGON</span></p>
    </div>

</footer> 
<!--  Jquery Core Script -->
<script src="js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="js/custom.js"></script>
    </body>
</html>