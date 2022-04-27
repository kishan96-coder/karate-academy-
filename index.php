<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet"  href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet"  href="owl/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet"  href="owl/docs/assets/vendors/jQuery.min.js">
    <link rel="stylesheet"  href="dist/owl.carousel.js">
    <link rel="stylesheet"  href="css/font/css/all.css">
      <link rel="stylesheet"  href="css/font/css/all.js">

    <title>Raj Karate</title>
    <style>
      html
      {
        overflow-x: hidden;
        scroll-behavior: smooth;
      }

      .carousel-indicators li{
        box-sizing: content-box;
        -ms-flex:0 1 auto;
        flex: 0 1 auto;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #e43d4e;
        background-clip:padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: 0.5;
        transition: opacity .6s ease;     
      }
      #ab{
        position: absolute;opacity: 0.9;
      height:600px;
      width: 100%;
      } 
     .card{
      max-width:100%;
      height: 100%;
      display: block;
     }
.divider-space{
  margin: 20px;
  background-color: #e43d4e;
  padding:2px;
  width: 60px;
}
.card-body h5{
text-transform: uppercase;
}
.cb{
background:linear-gradient(rgba(19, 24, 42,0.7),rgba(19, 24, 42,0.7)), url(img/slider5.jpg) no-repeat center;
background-size: cover;
background-attachment: fixed;
height:auto;
width: 100%;
}

video {
  width:100%;
  height: auto;
}

/*search bar*/
.search {
  width: 80%;
  border: 3px solid #fd5e53;
  border-right: none;
  padding: 5px;
  height: 36px;
  outline: none;
  color: #9dbfaf;
}
.search:focus {
  color: #000;
  box-shadow: 0 0 5px #fd5e53;
  background: #fd5e53;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}
.search-btn{
  width: 40px;
  height: 36px;
  border: 1px solid #fd5e53;
  background: #fd5e53;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;

}
li:hover{
color: #e43d4e;
}
@media only screen and (max-width: 800px)
{
  .carousel-item img{
    height: 200px;
  }
}
    </style>
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #13182a;">
  <a class="navbar-brand" href="#" style="color: #e43d4e;"><img src="logo2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon bg-light"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: #e43d4e;">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#programss" style="color: white;">Programs</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#aboutt" style="color: white;">About</a>
      </li>
     <!-- <li class="nav-item ">
        <a class="nav-link " href="#aboutt" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #13182a;">
          <a class="dropdown-item" href="#" style="color: white;">ABOUT</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="faq.php" style="color: white;">FAQ</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="instructors.php" style="color: white;">INSTRUCTORS</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#" style="color: white;">ELEMENTS</a>
            <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#" style="color: white;">TYPOGRAPHY</a>
            <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#" style="color: white;">APPOINTMENT</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;">BLOG</a>
      </li>-->
       <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: white;">CONTACTS</a>
      </li>
    </ul>
    
  </div>
</nav>
</header>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" id="ab1">
<ol class="carousel-indicators">
    <li type="radio" data-target="#carouselExampleControls" data-slide-to="0" class="active" value="01"></li>
    <li type="radio" data-target="#carouselExampleControls" data-slide-to="1"></li>
    <li type="radio" data-target="#carouselExampleControls" data-slide-to="2"></li>
    <li type="radio" data-target="#carouselExampleControls" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/call1.jpg" class="d-block w-100" alt="slider1" style="">

    </div>
    <div class="carousel-item">
      <img src="img/raj.png" class="d-block w-100" alt="slider2" style="">
    </div>
    <div class="carousel-item">
      <img src="img/slider15.jpg" class="d-block w-100" alt="slider3" style="">
    </div>
    <div class="carousel-item">
      <img src="img/slider16.jpg" class="d-block w-100" alt="slider4" style="">
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--contact section-->
<div class="container-fluid" style="text-align: center;padding-top: 50px;padding-bottom: 50px;background: linear-gradient(180deg, #13182a,gray);color: white;">
  <div class="row">
  <div class="col-lg-4 "  style="background:url('img/call.png');">
    <p style="color:#e43d4e;"><b>CALL US 24/7</b></p>
    <h4>+91-9997501145</h4>
  </div>
  <div class="col-lg-4" style="background: url('img/location.png');">
    <P style="color:#e43d4e;"><b>Hemraj Sharma,Near ITBP ADM/Wing Gate,Gajju band(power house)Mussorie.</b></P>
    <h4>Distt-Dehradun(UKD)</h4>
  </div>
  <div class="col-lg-4" style="background: url('img/clock.png');">
    <P style="color:#e43d4e;"><b>WORKING HOURS</b></P>
    <h4>DAILY:9AM-8PM</h4>
  </div>
</div>
</div>
<!--contact section end-->

<!--About -->
<div class="container-fluid" id="aboutt">
  <div class="row">
    <img src="img/34976.jpg" id="ab" style="width: 100%,height:auto;" alt="karate" class="responsive">
  <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>-->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding:100px 50px 50px 50px;"><h1 style="color: white;">ABOUT <SPAN style="color: red;">RAJ KARATE</SPAN> ACADEMY</h1>
      <p style="color: white;">One of the best Karate Academy In Dehradun Indoor Hall With Complete Synthetic mats on the floor</p>
      <p align="justify" style="color:#ebcf34;"><b>We are going to train more Students for national and international level in our “RAJ KARATE ACADEMY” which is affiliated by national federation. Lots of players of our academy have represented Uttrakhand state in  National karate championship/School games national and got medals.</b><a style="color:red;font-weight: bold;"></a></p>
      <h1 style="color: white;">HEM RAJ SHARMA</h1>
<h6 style="color: red;font-weight: bold;">DIRECTOR / INSTRUCTOR</h6></div>
  </div>
</div>
<!--paralex-->

<!---parallex end-->
<!--our programs-->

<div class="container-fluid" style="position: relative;padding:0px;" id="programss">
  <div class="cb" alt="parallex">
  <center><h1 style="color: white;padding-top: 100px;">OUR PROGRAMS</h1>
<div class="divider-space"></div>
<div class="owl-carousel owl-theme">
    <div class="item">
  <div class="card" style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_92.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Physical Fitness</h5>
    <p align="justify" class="card-text" style="color: #a4a9b9;">Physical fitness refers to the ability of your body systems to work together efficiently to allow you to be healthy and perform activities of daily living.</p>
    <a href="#" class="btn "></a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card"  style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_7.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Traditional Karate</h5>
    <p align="justify" class="card-text"  style="color: #a4a9b9;">Tradition karate is an art of self-defence which uses only and in the most efficient way human body.“Traditional Karate”  is a general term for Karate that follows Budo principles.</p>
    <a href="#" class="btn "></a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card"  style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_11.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Self Defence Techniques</h5>
    <p align="justify" class="card-text"  style="color: #a4a9b9;">Physical self-defense is the use of physical force to counter an immediate threat of violence. Such force can be either armed or unarmed.</p>
    <a href="#" class="btn "></a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card"  style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_24.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Sports Karate</h5>
    <p align="justify" class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn "></a>
  </div>
</div>

    </div>
    <!--  <div class="item">
  <div class="card"  style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_25.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Sports Karate</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card"  style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_7.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Card title</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card" style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_9.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Card title</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card" style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_11.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Card title</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card" style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_23.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Card title</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card" style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_25.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Card title</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card" style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_7.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Card title</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
      <div class="item">
  <div class="card" style="width: 22rem;background-color: #13182a;">
  <img class="card-img-top" src="img/img_9.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: white;">Card title</h5>
    <p class="card-text"  style="color: #a4a9b9">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>-->
  
</div>
</div>
</center>
</div>
</div>

<!--our program ends-->
<!--testimonials start-->
<?php
include 'client.php';
?>
<!--testimonials end-->

<!--Contact form start-->
<div class="container-fluid"  style="background-color: #13182a;">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

  <center>
    <!--<h1 style="color: white;">GET YOUR FREE PASS</h1>
    <div class="divider-space"></div>-->
  </center>



    </div>
  </div>
</div>
<!--c ontact form ends-->

<!--FAQ section start-->
<div class="container-fluid" style="background:#0a0d1b;">
  <div class="row">
    
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
      <video width="400" controls autoplay loop> 
       <source src="video/hemraj_ji_video.mp4" type="video/mp4">
     </video>
    </div>

<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
<h1 style="color:white;">SPARRING /FAQ</h1>
<div class="divider-space"></div>
  
  <div style="padding: 10px;width: 100%">
  
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">DO I HAVE TO BE IN SHAPE TO GET STARTED?</button>
<div id="demo" class="collapse text-light">
   We are focusing on your health or fitness. If you are already in shape than this is perfectly fine, but if you are not, than you don't need to be worry about that, We have an experienced team of trainer who worked hard to achieve the positive goal.
  </div>

</div>

 <div style="padding: 10px;">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">AM I TOO OLD TO START MARTIAL ARTS TRAINING?</button>

  <div id="demo1" class="collapse text-light">
    Their is no age limit to being fit, its all in the mind. Fitness is a factor which doesn't demand your Age Number.
  </div>
 
 </div>

<div style="padding: 10px;">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">WILL I GET HURT DURING THE TRAINING?</button>

  <div id="demo2" class="collapse text-light">
    More practice will enhace the quality of your training. It will only hurt if you not following the guidelines properly, but if you did all the training task properly than we asure you to get the postive result without affecting your stability of organs.
  </div>
</div>

<div style="padding: 10px;">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">CAN I COME AND WATCH A CLASS?</button>

  <div id="demo3" class="collapse text-light">
    We provide free demo classes, you can come to our Academy and get a free demo class as per the program you reqired.
  </div>
</div>


    </div>
  </div>
</div>


<!--FAQ section end-->
<!--footer start-->
<footer>

<div class="container-fluid" style="color: white;background: red;">
    
      <div class="row">
    
     <div class="cb" alt="parallex" style="padding: 80px;">
      <div class="row">
      

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-top:100px;">
       <center><h2>OVERVIEW</h2>
        <div class="divider-space"></div>
        <p>Since 2012 Raj Karate has represented India five times in
International karate championships including two time commonwealth karate
championship.</p>
        <h6>We are going to train more Students for National and International level in
our “RAJ KARATE ACADEMY” which is affiliated by national federation.</h6>
       <!-- <p>Knee Pain in Martial Arts: Causes and Remedies</p>
        <h6>AUGUST 7, 2017</h6></center>-->
      </div>
    
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-top:100px;">
          <center>
            <h2>RAJKARATE</h2>
             <div class="divider-space"></div>
          <p>One of the best Karate Academy In Dehradun Indoor Hall With Complete Synthetic mats on the floor.</p>

           <p><i class="fas fa-map-marker-alt "></i>  &nbsp;&nbsp;Hemraj Sharma,Near ITBP ADM/Wing Gate,Gajju band(power house)Mussoorie.Distt-Dehradun(UKD)</p>
           <p><i class="fas fa-phone-alt"></i>&nbsp;+91-9997501145</p>
           <p><i class="fas fa-envelope"></i>  rajkarateindia@gmail.com</p>
           <a href="https://www.facebook.com/hemraj.sharma.7564" target="_blank"><i class="fab fa-facebook fa-2x"></i></a> 
          <a href="https://www.justdial.com/Dehradun/Raj-Karate-Academy-Opp-IT-Park-Dehradun-City/9999PX135-X135-180627191943-L4M8_BZDET" target="_blank"><i class="fab fa-js-square fa-2x"></i></a>
         </center>
      </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-top:100px;">
        <center>
          <h2>SUBSCRIBE NOW</h2>
           <div class="divider-space"></div>
          <p>Subscribe to our Newsletter to be updated. We promise not to spam.</p>
           <div class="search-box">
             <input type="text" class="search" placeholder="What are you looking for?">
             <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </div>
          </center>
      </div>
       
</div>

      </div>
          
     </div>
     <!--footer two-->
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12" style="padding-top:30px;background: #0a0d1b;
color: white;">
  <center>
    <p>&copy Copyright 2020 | All Rights Reserved | Designed by <a href="https://wincerdigitalenterprise.com/" target="_blank">WincerDigitalEnterprises</a></p>
  </center>
</div>
     <!--footer second end-->
  </div>
</footer>
<!--footer end-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="owl/docs/assets/vendors/jquery.min.js"></script>
    <script src="owl/dist/owl.carousel.js"></script>
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
    </script>
  </body>
</html>