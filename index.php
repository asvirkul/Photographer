<?php 
     $title = "Новое письма с сайта фотографа";
     $to = "<asvirkul@gmail.com>";
     $subject = "Новое письмо с фотографа";
     $message = '<p>Имя человека:'.$_POST["name"].'</p><br/><p>Фамилия человека:'. $_POST["lastName"].'</p><br/>Email Человека:'. $_POST["email"] .'<br/> Сообщение Человека:'. 
     $_POST["message"];
     $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
     if ( isset($_POST["done"]) ) {
         mail($to, $subject, $message, $headers);
         header("Location:index.php");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  CSS  -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!--  Owl carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--  Materialeze  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css">
    <!--  Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,700,900&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body style="overflow: visible;">
   <section id="preloader"></section>
   
    <header>
            <nav>
               <a id="logo" href="#">Shulgan</a>
               <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                <ul class="menu table-of-contents hide-on-med-and-down">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#reviews">Client</a></li>
                    <li><a href="#works">Works</a></li>
                    <li><a href="#form">Contacts</a></li>
                </ul>
            </nav>
    </header>
    
    
    <section class="photo-wrapper section scrollspy" id="home">
        <div class="photo-text-wrapper">
            <div class="photo-text">
                <h2>welcome</h2>
                <h1>I'm <span class="animate"></span></h1>
                <p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                <a href="#">Download Cv</a>
            </div>
        </div>
    </section><!--photo-wrapper-->
    
    <section class="about-wrapper">
            <div class="photo-about">
                <img src="images/man-with-red-beard-and-sunglasses.jpg" alt="man-with-red-beard-and-sunglasses">
            </div>
            <div class="text-about section scrollspy" id="about">
                <h2><span>About</span> me</h2>
                <h3>Hello! <span>I'm Dima Shulgan.</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab, amet quod, enim neque hic deleniti qui repellendus voluptatum quas voluptatem, beatae autem officiis rem minima, alias error dolor dolores!</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit optio voluptatum rem ut quae dicta, voluptates saepe eius modi aut.</p>
                
                <p>Qui ducimus laborum quos modi vero consequatur dolores quod, assumenda dolorum rerum, et maxime deleniti a ab id facere! Maiores.</p>
            </div><!--text-about-->
    </section>
    
    <section class="background">
    <div class="services-wrapper">
        <div class="services-title">
            <h4>Our <span>Services</span></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id rerum ab, impedit aut, doloremque odio.</p>
        </div>
        <div class="services section scrollspy" id="services">
            <article>
               <div class="service-include">
                    <i class="fas fa-chart-line"></i>
                    <h4>Graphics design</h4>
                    <div class="line"></div>
                    <p>There are many variations of passages of but the majority have suffered alteration in some form.</p>
                </div>
            </article>
            <article>
               <div class="service-include">
                    <i class="fas fa-file-alt"></i>
                    <h4>Graphics design</h4>
                    <div class="line"></div>
                    <p>There are many variations of passages of but the majority have suffered alteration in some form.</p>
                </div> 
            </article>
            <article>
               <div class="service-include">
                    <i class="far fa-edit"></i>
                    <h4>Graphics design</h4>
                    <div class="line"></div>
                    <p>There are many variations of passages of but the majority have suffered alteration in some form.</p>
                </div>
            </article>
            <article>
               <div class="service-include">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <h4>Graphics design</h4>
                    <div class="line"></div>
                    <p>There are many variations of passages of but the majority have suffered alteration in some form.</p>
                </div>
            </article>
            <article>
               <div class="service-include">
                    <i class="fas fa-palette"></i>
                    <h4>Graphics design</h4>
                    <div class="line"></div>
                    <p>There are many variations of passages of but the majority have suffered alteration in some form.</p>
                </div>    
            </article>
            <article>
               <div class="service-include">
                    <i class="fas fa-mobile"></i>
                    <h4>Graphics design</h4>
                    <div class="line"></div>
                    <p>There are many variations of passages of but the majority have suffered alteration in some form.</p>
                </div>    
            </article>
        </div><!--services-->
    </div><!--services-wrapper-->
    </section><!--services-background-->
    

    <section class="reviews-wrapper">
        <div class="reviews-title">
            <h5>Our <span>Client</span></h5>
            <p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
        </div>
        <div class="owl-carousel section scrollspy" id="reviews">
            <article>
                <i class="fas fa-quote-left"></i>
                <img src="images/review-1.jpg" alt="">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit distinctio animi suscipit libero ad hic repellendus, rem reiciendis quae quidem?"</p>
                <p> - Anton Svirkul</p>
                
            </article>
            
            <article>
                <i class="fas fa-quote-left"></i>
                <img src="images/review-2.jpg" alt="">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit distinctio animi suscipit libero ad hic repellendus, rem reiciendis quae quidem?"</p>
                <p> - Anton Svirkul</p>
                
            </article>
        </div><!--owl-carousel-->
    </section><!--reviews-wrapper-->

    <section class="background">
        <div class="works-wrapper">
           <div class="works-title">
               <h5>Our <span>Works </span></h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id rerum ab, impedit aut, doloremque odio.</p>
           </div>
           <div class="buttons-wrapper">
               <button data-filter="*" class="active">All</button>
               <button data-filter=".wordpress">WordPress</button>
               <button data-filter=".websites">Websites</button>
               <button data-filter=".work">Work</button>
               <button data-filter=".ceo">CEO</button>
               
           </div><!--button-wrapper-->
          
            <div class="grid section scrollspy" id="works">
                <div class="grid-item websites wordpress">
                    <img class="materialboxed responsive-img" src="images/1.jpg" alt="">
                </div>
                <div class="grid-item ceo websites">
                    <img class="materialboxed responsive-img" src="images/2.jpg" alt="">
                </div>
                <div class="grid-item ceo wordpress websites work">
                    <img class="materialboxed responsive-img" src="images/3.jpg" alt="">  
                </div>
                <div class="grid-item ceo wordpress websites">
                    <img class="materialboxed responsive-img" src="images/4.jpg" alt="">
                </div>
                <div class="grid-item name">
                    <img class="materialboxed responsive-img" src="images/5.jpg" alt="">
                </div>
                <div class="grid-item name">
                    <img class="materialboxed responsive-img" src="images/5.jpg" alt="">
                </div>
            </div><!--grid-->
            </div><!--test-->
    </section><!--background-->


    <section class="contacts-wrapper container">
        <div class="contacts-title center">
            <h6><span>Contact</span> Us</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id rerum ab, impedit aut, doloremque odio.</p>
        </div>
        <div class="contacts-includes">
            <div class="contacts-icons row center">
               <article class="col m4 s12">
                    <i class="fas fa-mobile"></i>
                    <p>Call Us On</p>
                    <a href="tel:123-456-7890">123-456-7890</a>
               </article>
               <article class="col m4 s12">
                    <i class="fas fa-envelope"></i>
                    <p>Call Us On</p>
                    <a href="tel:123-456-7890">123-456-7890</a>
               </article>
               <article class="col m4 s12">
                   <i class="fas fa-map-marker-alt"></i>
                    <p>Call Us On</p>
                    <a href="tel:123-456-7890">123-456-7890</a>
               </article>
            </div><!--contacts-icons-->
            <div class="contact">
                <form id="form" class="section scrollspy"  action="" method="post">
                   <div class="float-input">
                        <input type="text" placeholder="Your Name*" name="name">
                    </div>
                    <div class="float-input-right">
                        <input type="text" placeholder="Your Last Name*" name="lastName"> 
                    </div>
                    <input type="text" placeholder="Your e-mail*" name="email">
                    <textarea placeholder="Your message..." name="message"></textarea> 
                    <input type="submit" name="done" value="Send Message" class="submit">
                </form>
            </div>
        </div><!--contacts-icons-->
    </section><!--contacts-wrapper-->
    
    <footer>
        <section class="footer-wrapper">
            <div class="container center">
                <p>&copy; Copyright 2020-2020</p>
                <p>Coded with &hearts;</p>
            </div>
        </section><!--footer-wrapper-->
    </footer>
    
    <!-- mobile menu -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href="#form">Contact</a></li>

   </ul>
    <!-- mobile menu -->
    
    <!--  Top  -->
    <section class="top-wrapper">
        <a href=".photo-wrapper"><i class="fas fa-arrow-up"></i></a>
    </section>
    <!--  Top  -->
    
<!--JavaScript-->
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="js/typed.js"></script>
<script src="js/jquery.particleground.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
