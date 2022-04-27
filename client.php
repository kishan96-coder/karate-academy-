
<style>
/*Testimonial */
#testimonial .container-fluid{
  padding: 100px;
  background-color:  #13182a; 
}
/*carousel*/
.carousel-inner .carousel-item .img-box{
  width: 135px;
  height: 135px;
}
</style>
  </head>
  <body>
<!--testimonials start-->
<section id="testimonial">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!--Title Text-->
        <h1 class="text-center title text-light">WHAT CLIENTS SAY</h1>
                <center><div class="divider-space"></div></center>
        <!--Carousel Begins-->
         <div class="carousel slide" id="my-carousel" data-ride="carousel">
          <ol class="carousel-indicators" style="top:330px;">
            <li data-target="#my-carousel" data-slide-to="0"></li>
            <li data-target="#my-carousel" data-slide-to="1" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <!--  Slide 1  --->
            <div class="carousel-item text-center">
              <div class="img-box border rounded-circle m-auto">
                <img src="img/person_1.jpg" class="d-block w-100 rounded-circle">
              </div>
              <h2 class="py-1 my-1"><strong class="text-light">Paul Mitchel</strong></h2>
              <h6 style="color: red;">Web Developer</h6>
              <p class="pt-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptatibus iusto, quia velit sint libero provident perferendis veritatis deserunt magnam est nisi autem voluptatem ullam soluta, obcaecati vero et quod.</p>
            </div>
             <!--  Slide 2 (Active by default)--->
            <div class="carousel-item text-center active">
              <div class="img-box border rounded-circle m-auto">
                <img src="img/person_2.jpg" class="d-block w-100 rounded-circle">
              </div>
              <h2 class="py-1 my-1"><strong class="text-light">Steve Fonsi</strong></h2>
              <h6 style="color:red;">Web Designer</h6>
              <p class="pt-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptatibus iusto, quia velit sint libero provident perferendis veritatis deserunt magnam est nisi autem voluptatem ullam soluta, obcaecati vero et quod.</p>
            </div>
             <!--  Slide 3  --->
            <div class="carousel-item text-center">
              <div class="img-box border rounded-circle m-auto">
                <img src="img/person_5.jpg" class="d-block w-100 rounded-circle">
              </div>
              <h2 class="py-1 my-1"><strong class="text-light">Daniel Veber</strong></h2>
              <h6  style="color:red;">SEO Analyst</h6>
              <p class="pt-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptatibus iusto, quia velit sint libero provident perferendis veritatis deserunt magnam est nisi autem voluptatem ullam soluta, obcaecati vero et quod.</p>
            </div>
        </div>
<center><i class="fas fa-quote-left" style="color:red;"></i></center>
          <!--Carousel Controls-->
        <a href="#my-carousel" class="carousel-control-prev" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#my-carousel" class="carousel-control-next" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
         </div>
         <!--Carousel Ends-->
      </div>
    </div>
  </div>
</section>

