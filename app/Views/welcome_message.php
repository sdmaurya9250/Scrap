<?php include(APPPATH . 'Views/components/header.php'); ?>

<!-- Your main content goes here -->


<section id="home-slider" class="owl-carousel owl-theme wf100">
   <div class="item">
      <div class="slider-caption">
         <div class="container">
            <div class="row">
               <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                  <strong>100k Plants Grown in 2018,</strong>
                  <h1>The World</h1>
                  <p> Environmental awareness is not a trend that comes
                     working towards making a small impact on Earth.</p>
               </div>
               <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                  <img src="/images/bgimg/tempo.png" alt="">
               </div>
            </div>
         </div>
      </div>
      <img src="/images/bgimg/bg.jpg" alt="">
   </div>
</section>
<!--Slider End-->

<section class="container">
   <div class="row">
      <div class="col-md-6 mt-5" data-aos="zoom-in-up">
         <a href="login">
            <div class="c-info text-center shadow-lg border border-info backcolor">
               <i class="size_i fa-solid fa-clock"></i>
               <h6 class="p-3">Schedule Pickup</h6>
            </div>
         </a>
      </div>
      <div class="col-md-6 mt-5" data-aos="zoom-in-up">
         <a href="login">
            <div class="c-info text-center shadow-lg border border-primary backcolor">
               <i class="size_i2 fa-solid fa-clipboard-list"></i>
               <h6 class="p-3">Rate List</h6>
            </div>
         </a>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 mt-5" data-aos="zoom-in-up">
         <div class="c-info text-center shadow-lg border border-warning backcolor" data-toggle="modal" data-target="#videoModal">
            <i class="size_i3 fa-solid fa-truck-fast"></i>
            <h6 class="p-3">How it will Work?</h6>
         </div>
      </div>
   </div>

   <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-header text-center">
               <h5 class="modal-title mx-auto" id="videoModalLabel">How it will Work</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="images/mov_bbb.mp4" allowfullscreen allow="autoplay"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!--Service Area Start-->
<section class="services-area wf100">
   <div class="container mt-5">
      <ul>
         <li>
            <a href="#" data-toggle="modal" data-target="#exampleModalLong01">
               <div class="sinfo">
                  <img src="/images/Paper/p1.png" alt="">
                  <h6>PEPAR</h6>
                  <p>Waste Management</p>
               </div>
            </a>
         </li>
         <li>
            <a href="#" data-toggle="modal" data-target="#exampleModalLong02">
               <div class="sinfo">
                  <img src="/images/Metal/metal.png" alt="">
                  <h6>METAL</h6>
                  <p>Aluminum, Steel, Brass</p>
               </div>
            </a>
         </li>
         <li>
            <a href="#" data-toggle="modal" data-target="#exampleModalLong03">
               <div class="sinfo">
                  <img src="/images/Plastic/plastic.png" alt="">
                  <h6>PLASTIC</h6>
                  <p>Save Earth</p>
               </div>
            </a>
         </li>
         <li>
            <a href="#" data-toggle="modal" data-target="#exampleModalLong04">
               <div class="sinfo">
                  <img src="/images/E-waste/ewaste.png" alt="">
                  <h6>E-WASTE</h6>
                  <p>Save Electircals Part</p>
               </div>
            </a>
         </li>
         <li>
            <a href="#" data-toggle="modal" data-target="#exampleModalLong05">
               <div class="sinfo">
                  <img src="/images/Clothe/clothe.jpg" alt="">
                  <h6>CLOTHES</h6>
                  <p>Don't Waste Your Clothes</p>
               </div>
            </a>
         </li>
      </ul>
   </div>
</section>
<!--Service Area End-->
<div class="modal fade" id="exampleModalLong01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Paper</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="text-center mt-3 mb-3">
               <img src="images/Paper/news.jpg" width="100%" height="200px" alt=""></img>
            </div>
            <ul class="mt-3 ml-4">
               <li>Wall Papers</li>
               <li>Rs 8/-Per Kg</li>
            </ul>
            <a href="login"><button class="btn btn-primary mt-5" type="button">Show More...</button></a>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalLong02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Metal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="text-center mt-3 mb-3">
               <img src="images/Metal/m8.jpg" width="100%" height="200px" alt=""></img>
            </div>
            <ul class="mt-3 ml-4">
               <li>Mixed Metal Waste</li>
               <li>Rs 100/-Per Kg</li>
            </ul>
            <a href="login"><button class="btn btn-primary mt-5" type="button">Show More...</button></a>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalLong03" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Plastic</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="text-center mt-3 mb-3">
               <img src="images/Plastic/plastic.jpg" width="100%" height="200px" alt=""></img>
            </div>
            <ul class="mt-3 ml-4">
               <li>Mix Plastic</li>
               <li>Rs 8/-Per Kg</li>
            </ul>
            <a href="login"><button class="btn btn-primary mt-5" type="button">Show More...</button></a>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalLong04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">E-waste</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="text-center mt-3 mb-3">
               <img src="images/E-waste/mixer.png" width="100%" height="200px" alt=""></img>
            </div>
            <ul class="mt-3 ml-4">
               <li>Mixer E-Waste</li>
               <li>Rs 15/-Per Kg</li>
            </ul>
            <a href="login"><button class="btn btn-primary mt-5" type="button">Show More...</button></a>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="exampleModalLong05" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Clothe</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="text-center mt-3 mb-3">
               <img src="images/Clothe/clothe1.jpg" width="100%" height="200px" alt=""></img>
            </div>
            <ul class="mt-3 ml-4">
               <li>Clothe</li>
               <li>Rs 5/-Per Kg</li>
            </ul>
            <a href="login"><button class="btn btn-primary mt-5" type="button">Show More...</button></a>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body1">
            <div class="container">
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<!--<section class="container">-->
<!--   <div class="row">-->
<!--      <div class="col-md-6 mt-5" data-aos="zoom-in-up">-->
<!--         <a href="login">-->
<!--            <div class="c-info text-center shadow-lg border border-info backcolor">-->
<!--               <i class="size_i fa-solid fa-clock"></i>-->
<!--               <h6 class="p-3">Schedule Pickup</h6>-->
<!--            </div>-->
<!--         </a>-->
<!--      </div>-->
<!--      <div class="col-md-6 mt-5" data-aos="zoom-in-up">-->
<!--         <a href="login">-->
<!--            <div class="c-info text-center shadow-lg border border-primary backcolor">-->
<!--               <i class="size_i2 fa-solid fa-clipboard-list"></i>-->
<!--               <h6 class="p-3">Rate List</h6>-->
<!--            </div>-->
<!--         </a>-->
<!--      </div>-->
<!--   </div>-->
<!--   <div class="row">-->
<!--      <div class="col-md-12 mt-5" data-aos="zoom-in-up">-->
<!--         <div class="c-info text-center shadow-lg border border-warning backcolor" data-toggle="modal" data-target="#videoModal">-->
<!--            <i class="size_i3 fa-solid fa-truck-fast"></i>-->
<!--            <h6 class="p-3">How it will Work?</h6>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->

<!--   <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">-->
<!--      <div class="modal-dialog modal-dialog-centered modal-lg">-->
<!--         <div class="modal-content">-->
<!--            <div class="modal-header text-center">-->
<!--               <h5 class="modal-title mx-auto" id="videoModalLabel">How it will Work</h5>-->
<!--               <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                  <span aria-hidden="true">&times;</span>-->
<!--               </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--               <div class="embed-responsive embed-responsive-16by9">-->
<!--                  <iframe class="embed-responsive-item" src="images/mov_bbb.mp4" allowfullscreen allow="autoplay"></iframe>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->


<!--About Section Start-->
<!--<section class=" wf100 p80 mb-5 shadow-lg mt-5" id="about"> <!--home-about-->-->
<!--   <div class="container">-->
<!--      <div class="row">-->
<!--         <div class="col-md-6">-->
<!--            <div class="about-txt">-->
<!--               <h2> <span>ecova.</span> is providing the best-->
<!--                  solution of Eco Environment-->
<!--               </h2>-->
<!--               <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of green-->
<!--                  businesses helping people save energy, water, and other resources. <strong>Definitely, you can-->
<!--                     go with this business as it is a nothing but the future.</strong> </p>-->
<!--               <p> When you embrace eco awareness as a part of your daily life, you can defintiely think about the-->
<!--                  Environment business. </p>-->
<!--               <ul>-->
<!--                  <li><i class="fas fa-check"></i> Solar Energy</li>-->
<!--                  <li><i class="fas fa-check"></i> Waste Management </li>-->
<!--                  <li><i class="fas fa-check"></i> Eco Ideas </li>-->
<!--                  <li><i class="fas fa-check"></i> Recycling Materials</li>-->
<!--                  <li><i class="fas fa-check"></i> Plant Ecology</li>-->
<!--                  <li><i class="fas fa-check"></i> Saving Wildlife </li>-->
<!--               </ul>-->
<!--               <a class="lm" href="#exampleModal" data-toggle="modal" data-target="#exampleModal">Learn More</a>-->

<!--            </div>-->
<!--         </div>-->
<!--         <div class="col-md-6">-->
<!--            <div class="about-pic">-->
<!--               <div class="pic1">-->
<!--                  <div id="pic-slider" class="owl-carousel owl-theme">-->
<!--                     <div class="item"><img src="/images/aboutpic1.jpg" alt=""></div>-->
<!--                     <div class="item"><img src="/images/aboutpic3.jpg" alt=""></div>-->
<!--                     <div class="item"><img src="/images/aboutpic5.jpg" alt=""></div>-->
<!--                  </div>-->
<!--               </div>-->
<!--               <div class="pic2"><img src="/images/aboutpic2.jpg" alt=""></div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<!-- How its work -->
<section id="How_it_work">
   <div class="container how mt-5 mb-5">
      <div class="mb-5">
         <h2>How it Work</h2>
      </div>
      <div class="row" data-aos="fade-right">
         <div class="c-info col polygon polygon1 border-5 border-primary backcolor">
            <i class="size_1 fas fa-recycle"></i>
            <h6 class="p-3 m-3">Segregate Your Recyclables</h6>
         </div>
         <div class="c-info col polygon polygon2 border-5 border-danger backcolor">
            <i class="size_2 far fa-clock"></i>
            <h6 class="p-3 m-3">Schedule a Pickup</h6>
         </div>
         <div class="c-info col polygon polygon3 border-5 border-warning backcolor">
            <i class="size_3 fas fa-door-open"></i>
            <h6 class="p-3 m-3">Door Step Service</h6>
         </div>
         <div class="c-info col polygon polygon4 border-5 border-info backcolor">
            <i class="size_4 fas fa-money-bill-alt"></i>
            <h6 class="p-3 m-3">Instant Payment</h6>
         </div>
         <div class="c-info col polygon polygon5 border-5 border-success backcolor">
            <i class="size_5 fas fa-thumbs-up"></i>
            <h6 class="p-3 m-3">Congrats</h6>
         </div>
      </div>
   </div>
</section>

<div class="container">
   <div class="container1">
      <div class="row">
         <div class="col-4 col-md-4 col-sm-4 col-lg-4 col-xl-4">
            <div class="card1">
               <div class="imgBx">
                  <img class="img1" src="/images/Paper/news.jpg" alt="">
               </div>
               <div class="content1">
                  <h2>Card 1</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deserunt voluptas suscipit
                     dicta non
                     iure minus rerum.</p>
               </div>
            </div>
         </div>
         <div class="col-4 col-md-4 col-sm-4 col-lg-4 col-xl-4">
            <div class="card1">
               <div class="imgBx">
                  <img class="img1" src="/images/Paper/magazine.jpg" alt="">
               </div>
               <div class="content1">
                  <h2>Card 2</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deserunt voluptas suscipit
                     dicta non
                     iure minus rerum.</p>
               </div>
            </div>
         </div>
         <div class="col-4 col-md-4 col-sm-4 col-lg-4 col-xl-4">
            <div class="card1">
               <div class="imgBx">
                  <img class="img1" src="/images/Paper/journal.jpg" alt="">
               </div>
               <div class="content1">
                  <h2>Card 3</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deserunt voluptas suscipit
                     dicta non
                     iure minus.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<!--Services Slider Start-->
<!--<section class=" wf100 mt-5 p80bottom">-->
<!--   <div class="container">-->
<!--      <div class="row">-->
         
<!--         <div class="ser-col">-->
<!--            <div class="ser-box">-->
<!--               <div class="ser-thumb">-->
<!--                  <a href="#"><i class="fas fa-link"></i></a>-->
<!--                  <img src="/images/serimg1.jpg" alt="">-->
<!--               </div>-->
<!--               <div class="ser-txt">-->
<!--                  <h4> <a href="#">Control Pollution & Environment</a> </h4>-->
<!--                  <span class="aicon"><i class="fas fa-arrow-right"></i></span>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->

<!--         <div class="ser-col">-->
<!--            <div class="ser-box">-->
<!--               <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg2.jpg" alt=""></div>-->
<!--               <div class="ser-txt">-->
<!--                  <h4> <a href="#">Save World’s-->
<!--                        Water Resources</a>-->
<!--                  </h4>-->
<!--                  <span class="aicon"><i class="fas fa-arrow-right"></i></span>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->

<!--         <div class="ser-col">-->
<!--            <div class="ser-box">-->
<!--               <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg3.jpg" alt=""></div>-->
<!--               <div class="ser-txt">-->
<!--                  <h4> <a href="#">Recycling & Waste-->
<!--                        Management</a>-->
<!--                  </h4>-->
<!--                  <span class="aicon"><i class="fas fa-arrow-right"></i></span>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->

<!--         <div class="ser-col">-->
<!--            <div class="ser-box">-->
<!--               <div class="ser-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg4.jpg" alt=""></div>-->
<!--               <div class="ser-txt">-->
<!--                  <h4> <a href="#">Save Plants &-->
<!--                        Forest Planting</a>-->
<!--                  </h4>-->
<!--                  <span class="aicon"><i class="fas fa-arrow-right"></i></span>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->

<!--         <div class="ser-col">-->
<!--            <div class="ser-box">-->
<!--               <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg5.jpg" alt=""></div>-->
<!--               <div class="ser-txt">-->
<!--                  <h4> <a href="#">Implement Solar-->
<!--                        & Wind Energies</a>-->
<!--                  </h4>-->
<!--                  <span class="aicon"><i class="fas fa-arrow-right"></i></span>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->

<!--      </div>-->
<!--   </div>-->

<!--</section>-->
<!--Services Slider End-->

<!--Activities Gallery Section Start-->
<!-- <section class="agallery gallery wf100 p80">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="section-title">
                     <strong>Our Latest</strong>
                     <h2>Activities Gallery</h2>
                  </div>
               </div>
               <div class="col-lg-7">
                  <ul class="flinks">
                     <li><a data-filter="*" href="#" title="">Show All</a></li>
                     <li><a data-filter=".f-cat1" href="#" title="">Wildlife</a></li>
                     <li><a data-filter=".f-cat2" href="#" title="">Water Resources</a></li>
                     <li><a data-filter=".f-cat3" href="#" title="">Solar Energy</a></li>
                     <li><a data-filter=".f-cat4" href="#" title="">Recycling</a></li>
                  </ul>
               </div>
            </div>
            <div class="gallery-inner masonry">
               <div class="row">
                  <ul>
                     <li class="col-md-3 col-sm-6 f-cat f-cat1 f-cat4"><span><a href="images/agallery1.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a> <img
                              src="/images/agallery1.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat2 f-cat3"><span> <a href="images/agallery2.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img
                              src="/images/agallery2.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat3 f-cat1"><span> <a href="images/agallery3.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a> <img
                              src="/images/agallery3.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat4 f-cat2"><span> <a href="images/agallery4.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img
                              src="/images/agallery4.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat1"><span> <a href="images/agallery5.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img
                              src="/images/agallery5.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat2"><span> <a href="images/agallery6.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img
                              src="/images/agallery6.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat3 f-cat2"><span> <a href="images/agallery7.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img
                              src="/images/agallery7.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat4"><span> <a href="images/agallery8.jpg"
                              data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img
                              src="/images/agallery8.jpg" alt=""></span> </li>
                  </ul>
               </div>
            </div>
         </div>
      </section> -->
<!--Activities Gallery Section End-->

<!--Current Promises Section Start-->
<!-- <section class="wf100 p80 text-center">
         <div class="shadow-lg rounded container">
            <h3 class="text-center pt-3">Your Achievments</h3>
            <div class="row p-5">
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>Client Satisfcation</h6>
                        <p class="counter-count">400</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>Wasted Recycle</h6>
                        <p class="counter-count">300</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>Collection Partners</h6>
                        <p class="counter-count">100</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>City Serving</h6>
                        <p class="counter-count">500</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section> -->
<!--Current Promises Section End-->

<!--Contact Start-->
<!-- <section class=" shadow-lg mt-5 mb-5 contact-page wf100 p80" id="ContactUs">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="contact-form">
                     <h3 class="text-black">Feel Free to Contact us.</h3>
                     <ul class="cform">
                        <li class="half pr-15">
                           <input type="text" class="form-control" placeholder="Full Name">
                        </li>
                        <li class="half pl-15">
                           <input type="text" class="form-control" placeholder="Email">
                        </li>
                        <li class="half pr-15">
                           <input type="text" class="form-control" placeholder="Contact">
                        </li>
                        <li class="half pl-15">
                           <input type="text" class="form-control" placeholder="Subject">
                        </li>
                        <li class="full">
                           <textarea class="textarea-control" placeholder="Message"></textarea>
                        </li>
                        <li class="full">
                           <input type="submit" value="Contact us" class="fsubmit">
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="google-map">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11418.310112375979!2d-74.00986187433132!3d40.710981182716246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1540972202179"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
<!--Contact End-->

<!--Partner Logos Section Start-->
<!-- <div class="partner-logos wf100 mb80">
         <div class="container">
            <div id="partner-logos" class="owl-carousel owl-theme">
               <div class="item"><img src="/images/plogo1.png" alt=""></div>
               <div class="item"><img src="/images/plogo2.png" alt=""></div>
               <div class="item"><img src="/images/plogo3.png" alt=""></div>
               <div class="item"><img src="/images/plogo4.png" alt=""></div>
               <div class="item"><img src="/images/plogo5.png" alt=""></div>
               <div class="item"><img src="/images/plogo1.png" alt=""></div>
               <div class="item"><img src="/images/plogo2.png" alt=""></div>
               <div class="item"><img src="/images/plogo3.png" alt=""></div>
               <div class="item"><img src="/images/plogo4.png" alt=""></div>
               <div class="item"><img src="/images/plogo5.png" alt=""></div>
            </div>
         </div>
      </div> -->
<!--Partner Logos Section End-->

<?php include(APPPATH . 'Views/components/footer.php'); ?>