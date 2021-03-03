@extends('frontend.layouts.app')

@section('title', __('Home'))

@push('after-style')
    <link rel="stylesheet" href="css/style-details.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <section class="home-three home1-overlay home3_bgi6">
            <div class="container">
               <div class="row posr">
                  <div class="col-lg-12">
                     <div class="home-text text-center">
                        <h2 class="fz50">Enjoy an Amazing Range of Online Experiences</h2>
                        <p class="color-white">Provided by Passionate Creators Worldwide</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- How Does It Work -->
         <section id="how-it-work" class="our-courses pt90 pt650-992">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <a href="#how-it-work">
                        <div class="mouse_scroll">
                           <div class="icon"><span class="flaticon-download-arrow"></span></div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="container how-it-works-ct">
               <div class="row ">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="main-title text-center">
                        <h3 class="mt0">How It Works</h3>
                     </div>
                  </div>
               </div>
               <div class="row how-works">
                  <div class="col-sm-6 col-lg-4 d-flex">
                     <div class="img_hvr_box d-flex align-items-center" style="">
                        
                        <div class="overlay overlay-hg">
                           <div class="work-imgs-hh">
                              <img src="images/background/2.jpg">
                           </div>
                           <div class="img-abs overlay-hg">
                              <div class="col-md-12 p-0">
                                 <div class="count-no">
                                    <p>1</p>
                                 </div>
                                 <div class="details">
                                    <h5>Find exciting classes and activities <br>
                                     hosted by various experts worldwide
                                    </h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 d-flex">
                     <div class="img_hvr_box d-flex align-items-center" style="">
                        <div class="overlay overlay-hg">
                           <div class="work-imgs-hh">
                              <img src="images/background/3.jpg">
                           </div>
                           <div class="img-abs overlay-hg">
                              <div class="col-md-12 p-0">
                                 <div class="count-no">
                                    <p>2</p>
                                 </div>
                                 <div class="details">
                                    <h5>Book these experiences privately <br>
                                     or book with a group
                                    </h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-4 d-flex">
                     <div class="img_hvr_box d-flex align-items-center" style="">
                        <div class="overlay overlay-hg">
                           <div class="work-imgs-hh">
                              <img src="images/background/4.jpg">
                           </div>
                           <div class="img-abs overlay-hg">
                              <div class="col-md-12 p-0">
                                 <div class="count-no">
                                    <p>3</p>
                                 </div>
                                 <div class="details">
                                    <h5>Enjoy these experiences live from <br>
                                     the comfort of your home
                                    </h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Categories --> 
         <section id="our-courses" class="our-courses our-categ">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="main-title text-center">
                        <h3 class="mt0">Categories</h3>
                     </div>
                  </div>
               </div>
               <div class="row categories-row">
                  <div class="col-lg-12">
                     <!-- ............... Category Section For Desktop Version .................  -->
                     <div class="row categ-for-desktop">
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box" style="background-image: url(images/courses/1c.jpg);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Art & Design</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box" style="background-image: url(images/courses/2c.jpg);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Cooking & Baking</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box" style="background-image: url(images/courses/3c.jpg);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Music & Concerts</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box " style="background-image: url(images/courses/4c.jpg);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Dance & Fitness</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box" style="background-image: url(images/courses/5c.jpg);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Magic & Games</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box" style="background-image: url(images/courses/6c.png);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Travel & Languages</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box" style="background-image: url(images/courses/7c.jpg);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Filming & Photography</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item col-sm-6 col-lg-3">
                           <div class="img_hvr_box" style="background-image: url(images/courses/8c.jpg);">
                              <div class="overlay">
                                 <div class="details">
                                    <h5>Hobbies & Lifestyle</h5>
                                    <p>[Live]</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- ............... Category Section For Mobile Version .................  -->
                     <div class="categ-slider-for-mobile">
                        <div class="feature_post_slider  ">
                           <div class="item">
                              <div class="img_hvr_box" style="background-image: url(images/courses/1c.jpg);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Art & Design</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="img_hvr_box" style="background-image: url(images/courses/2c.jpg);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Cooking & Baking</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="img_hvr_box" style="background-image: url(images/courses/3c.jpg);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Music & Concerts</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="img_hvr_box " style="background-image: url(images/courses/4c.jpg);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Dance & Fitness</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>                          
                           </div>
                           <div class="item">                           
                              <div class="img_hvr_box" style="background-image: url(images/courses/5c.jpg);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Magic & Games</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="img_hvr_box" style="background-image: url(images/courses/6c.png);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Travel & Languages</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                               <div class="img_hvr_box" style="background-image: url(images/courses/7c.jpg);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Filming & Photography</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="img_hvr_box" style="background-image: url(images/courses/8c.jpg);">
                                 <div class="overlay">
                                    <div class="details">
                                       <h5>Hobbies & Lifestyle</h5>
                                       <p>[Live]</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="courses_all_btn text-center">
                        <a class="btn btn-transparent" href="#">View All</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Our Creators -->
         <section id="our-hosts" class="our-blog our-hosts">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="main-title text-center">
                        <h3 class="mt0">Our Hosts</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div id="blog_post_slider_home2" class="host-same-nav ">
                        <div class="row m0 box-listing blog_post_slider_home2">
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/1.jpg" alt="1.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali TUFAN</span> &nbsp;•&nbsp; Chef </p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 </li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>  
                                 </ul>                                       
                                 </div>
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t5.jpg" alt="t5.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/5.jpg" alt="5.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali TUFAN</span> &nbsp;•&nbsp; Chef</p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>              
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>      
                                 </ul>
                                 </div> 
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/2.jpg" alt="2.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Dancer </p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>      
                                 </ul>
                                 </div>
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/4.jpg" alt="4.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Photographer</p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>      
                                 </ul>   
                                 </div> 
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t3.jpg" alt="t3.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/3.jpg" alt="3.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Dancer </p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 </li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                                 </ul>
                                 </div>
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/1.jpg" alt="1.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali TUFAN</span> &nbsp;•&nbsp; Chef</p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 </li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                                 </ul>                                       
                                 </div> 
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/4.jpg" alt="4.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Photographer </p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>             
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 </li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                                 </ul>
                                 </div>
                                 </div>
                                 </a>
                              </div>
                           </div>
                           <div class="item col-sm-12 col-lg-3">
                              <div class="top_courses">
                                 <a href="creator-listing.html">
                                    <div class="thumb">
                                       <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                       <div class="overlay">
                                          <div class="icon tooltip">
                                             <span class="flaticon-like "></span>
                                             <span class="tooltiptext">Add to wishlist</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="details">
                                       <div class="creators-avatar">
                                          <img class="img-fluid" src="images/testimonial/2.jpg" alt="2.jpg"/>
                                       </div>
                                       <div class="tc_content">
                                          <div class="verif-hh tooltip verif-tooltip">
                                             <i class="fa fa-check" aria-hidden="true"></i>
                                             <span class="tooltiptext">Verified</span>
                                          </div>
                                          <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Dancer</p>
                                          <h5>Designing a Responsive Mobile Website with Muse</h5>
                                          <div class="experienceCard-topDetails">
                                             <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                                          </div>
                                          <ul class="tc_review review-cc">
                                             <li class="list-inline-item">
                                 <a href="#"><i class="fa fa-star"></i></a>
                                 </li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                                 </ul>                                       
                                 </div> 
                                 </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="courses_all_btn text-center">
                        <a class="btn btn-transparent" href="#">View All Hosts</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Learning Slide -->
         <section id="learning-slide" class="learning-slde-sec">
            <div class="container-fluid p0">
               <div class="row" style="margin: 0 auto">
                  <div class="col-lg-12 p-0">
                     <div class="col-lg-12 p-0 learning-slider">
                        <div class="col-lg-12 p-0 item">
                           <div class="row col-lg-12 bg-of-slide bg-learning">
                              <div class="col-lg-6 col-sm-6 p-0">
                                 <div class="slide-img">
                                    <img src="images/2-slides-1img.png" alt="Learning slide">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6">
                                 <div class="slide-cont">
                                    <h2>
                                       Improve your skills by learning from various experts
                                    </h2>
                                    <h3>
                                       Whether you are learning from the scratch or an intermediate learner, our creators will work with you to take your skills to an advanced level.
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 p-0 item">
                           <div class="row col-lg-12 bg-of-slide bg-learning">
                              <div class="col-lg-6 col-sm-6 p-0">
                                 <div class="slide-img">
                                    <img src="images/2-slides-2img.jpg" alt="Learning slide">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6">
                                 <div class="slide-cont">
                                    <h2>
                                       We provide amazing group classes and activities
                                    </h2>
                                    <h3>
                                       Enjoy classes & activities with friends and family members. Pick from a wide range of group experiences including cooking classes, fitness classes, magical performances and lots more!
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Top Courses -->
         <section id="top-courses" class="top-courses trending-exp pb30">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="main-title text-center">
                        <h3 class="mt0">Trending experiences</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="row m0 box-listing emply-text-sec host-same-nav blog_post_slider_home2">
                        <div class="item col-sm-12 col-lg-3">
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/1.jpg" alt="1.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>                                     
                              <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali TUFAN</span> &nbsp;•&nbsp; Chef </p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a>
                              </li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>  
                              </ul>                                       
                              </div>
                              </div>
                              </a>
                           </div>
                        </div>
                        <div class="item col-sm-12 col-lg-3">                           
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t5.jpg" alt="t5.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/5.jpg" alt="5.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>       
                              <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali TUFAN</span> &nbsp;•&nbsp; Chef </p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>              
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>      
                              </ul>
                              </div> 
                              </div>
                              </a>
                           </div>
                        </div>
                        <div class="item col-sm-12 col-lg-3">
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/2.jpg" alt="2.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>       
                              <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Dancer </p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>      
                              </ul>
                              </div>
                              </div>
                              </a>
                           </div>
                        </div>
                        <div  class="item col-sm-12 col-lg-3">
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/4.jpg" alt="4.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>       
                              <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Photographer</p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>      
                              </ul>   
                              </div> 
                              </div>
                              </a>
                           </div>
                        </div>
                        <div class="item col-sm-12 col-lg-3">
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t3.jpg" alt="t3.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/3.jpg" alt="3.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>       
                              <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Dancer </p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a>
                              </li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                              </ul>
                              </div>
                              </div>
                              </a>
                           </div>
                        </div>
                        <div  class="item col-sm-12 col-lg-3">
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/1.jpg" alt="1.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>       
                              <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali TUFAN</span> &nbsp;•&nbsp; Chef</p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a>
                              </li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                              </ul>                                       
                              </div> 
                              </div>
                              </a>
                           </div>
                        </div>
                        <div class="item col-sm-12 col-lg-3">
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/4.jpg" alt="4.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>       
                              <p class="experienceCard-cityHostTitle tile-22"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Photographer </p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>             
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a>
                              </li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                              </ul>
                              </div>
                              </div>
                              </a>
                           </div>
                        </div>
                        <div  class="item col-sm-12 col-lg-3">
                           <div class="top_courses">
                              <a href="creator-listing.html">
                                 <div class="thumb">
                                    <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                    <div class="overlay">
                                       <div class="icon tooltip">
                                          <span class="flaticon-like "></span>
                                          <span class="tooltiptext">Add to wishlist</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div class="trend-word">
                              <a href="#">Trending</a></div>
                              <div class="creators-avatar">
                              <img class="img-fluid" src="images/testimonial/2.jpg" alt="2.jpg"/>
                              </div>
                              <div class="tc_content">
                              <div class="verif-hh tooltip verif-tooltip">
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <span class="tooltiptext">Verified</span>
                              </div>
                              <p class="experienceCard-cityHostTitle"> <span class="experienceCard-hostName">Ali Alex TUFAN</span> &nbsp;•&nbsp; Dancer</p>
                              <h5>Designing a Responsive Mobile Website with Muse</h5>
                              <div class="experienceCard-topDetails">
                              <span class="experienceCard-topDetails-price">From £32.50 per person</span>
                              </div>
                              <ul class="tc_review review-cc">
                              <li class="list-inline-item">
                              <a href="#"><i class="fa fa-star"></i></a>
                              </li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>             
                              </ul>                                       
                              </div> 
                              </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Top Courses -->
         <section id="watch-video" class="watch-videoss">
            <div class="container-fluid p0">
               <div class="row" style="margin: 0 auto;">
                  <div class="col-lg-12 item p-0">
                     <div class="row col-lg-12 bg-of-slide watch-video-1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="slide-cont">
                              <h2>
                                 Watch live classes on various devices from the comfort of your home
                              </h2>
                              <h3>
                                 We provide a range of multiple booking options and payment choices for guests
                              </h3>
                              <ul class="row col-lg-12 p-0">
                                 <li class="col-md-6 custom-for-watch">
                                    <div class="form-group custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="lappyW" checked="checked" disabled="true">
                                       <label class="custom-control-label" for="lappyW">Laptop / Desktop</label>
                                    </div>
                                 </li>
                                 <li class="col-md-6 custom-for-watch">
                                    <div class="form-group custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="tabletW" checked="checked" disabled="true">
                                       <label class="custom-control-label" for="tabletW">Tablet</label>
                                    </div>
                                 </li>
                                 <li class="col-md-6 custom-for-watch">
                                    <div class="form-group custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="mobileW" checked="checked" disabled="true">
                                       <label class="custom-control-label" for="mobileW">Mobile</label>
                                    </div>
                                 </li>
                                 <li class="col-md-6 custom-for-watch">
                                    <div class="form-group custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="tvW" checked="checked" disabled="true">
                                       <label class="custom-control-label" for="tvW">Smart TV</label>
                                    </div>
                                 </li>
                              </ul>
                              <a href="#">
                                 <div class="get-start">Get Started &nbsp;&nbsp;<img src="images/arrow-icon.png" alt="arrow icon"></div>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="watch-video-img">
                              <img src="images/live-experience.png" alt="Video Watch slide">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Weekly Features -->
         <section id="customer-feedback"class="weekly-features-cls">
            <div class="container-fluid p0">
               <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="main-title text-center">
                        <h3 class="mt0">Guest Reviews</h3>
                     </div>
                  </div>
                  <div class="col-lg-12 p-0">
                     <div class="col-lg-12 p-0 weekly-slider">
                        <div class="col-lg-12 p-0 item" style="margin: 0 auto">
                           <div class="row col-lg-8 bg-of-slide bg-of-slide-weekly">
                              <div class="text-center">
                                 <div class="weekly-sec">
                                    <div class="creators-avatar-weekly">
                                       <img class="img-fluid" src="images/testimonial/4.jpg" alt="4.jpg"/>
                                    </div>
                                    <h2>
                                       Alex <span> G </span>
                                    </h2>
                                    <h3>
                                       Telemarketor
                                    </h3>
                                    <p>
                                       Whether you are learning from the scratch or an intermediate learner, our creators will work with you to take your skills to an advanced level.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 p-0 item" style="margin: 0 auto">
                           <div class="row col-lg-8 bg-of-slide bg-of-slide-weekly">
                              <div class="text-center">
                                 <div class="weekly-sec">
                                    <div class="creators-avatar-weekly">
                                       <img class="img-fluid" src="images/testimonial/2.jpg" alt="2.jpg"/>
                                    </div>
                                    <h2>
                                       Ali Alex <span> G </span>
                                    </h2>
                                    <h3>
                                       Telemarketor
                                    </h3>
                                    <p>
                                       Whether you are learning from the scratch or an intermediate learner, our creators will work with you to take your skills to an advanced level.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 p-0 item" style="margin: 0 auto">
                           <div class="row col-lg-8 bg-of-slide bg-of-slide-weekly">
                              <div class="text-center">
                                 <div class="weekly-sec">
                                    <div class="creators-avatar-weekly">
                                       <img class="img-fluid" src="images/testimonial/1.jpg" alt="1.jpg"/>
                                    </div>
                                    <h2>
                                       Ali <span> T </span>
                                    </h2>
                                    <h3>
                                       Telemarketor
                                    </h3>
                                    <p>
                                       Whether you are learning from the scratch or an intermediate learner, our creators will work with you to take your skills to an advanced level.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 p-0 item" style="margin: 0 auto">
                           <div class="row col-lg-8 bg-of-slide bg-of-slide-weekly">
                              <div class="text-center">
                                 <div class="weekly-sec">
                                    <div class="creators-avatar-weekly">
                                       <img class="img-fluid" src="images/testimonial/5.jpg" alt="5.jpg"/>
                                    </div>
                                    <h2>
                                       Alex <span> G </span>
                                    </h2>
                                    <h3>
                                       Telemarketor
                                    </h3>
                                    <p>
                                       Whether you are learning from the scratch or an intermediate learner, our creators will work with you to take your skills to an advanced level.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12 p-0 item" style="margin: 0 auto">
                           <div class="row col-lg-8 bg-of-slide bg-of-slide-weekly">
                              <div class="text-center">
                                 <div class="weekly-sec">
                                    <div class="creators-avatar-weekly">
                                       <img class="img-fluid" src="images/testimonial/3.jpg" alt="3.jpg"/>
                                    </div>
                                    <h2>
                                       Ali Alex <span> G </span>
                                    </h2>
                                    <h3>
                                       Telemarketor
                                    </h3>
                                    <p>
                                       Whether you are learning from the scratch or an intermediate learner, our creators will work with you to take your skills to an advanced level.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
@endsection

@push('after-scripts')
<script type="text/javascript" src="js/slick.js"></script>
      <script type="text/javascript" src="js/slick.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
            
           $('.host-slider').slick({         
            slidesToShow: 1,         
             slidesToScroll: 1,         
             dots: false,         
             arrows: true,         
             autoplay: false, 
             fade: true,        
             autoplaySpeed: 3000, 
             mobileFirst: true,        
             responsive: [   
             {         
                         breakpoint: 480,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       },            
                       {         
                         breakpoint: 500,         
                         settings: {         
                           slidesToShow: 2,         
                           slidesToScroll: 2         
                         }         
                       },      
                       {         
                         breakpoint: 1200,
                         settings: "unslick"
                       }         
                      ]          
            });         
         });         
      </script>
      <script type="text/javascript">
         $(document).ready(function(){         
           $('.category-slider').slick({         
            slidesToShow: 1,         
             slidesToScroll: 1,         
             dots: false,         
             arrows: true,         
             autoplay: false, 
             fade: true,        
             autoplaySpeed: 5000,
             mobileFirst: true,           
             responsive: [         
                       {         
                         breakpoint: 480,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       }, 
                        {         
                         breakpoint: 600,         
                         settings: {         
                           slidesToShow: 2,         
                           slidesToScroll: 2         
                         }         
                       },           
                       {         
                         breakpoint: 768,         
                         settings: {         
                           slidesToShow: 2,         
                           slidesToScroll: 1         
                         }         
                       }         
                      ]          
            });         
         });         
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
         
           $('.learning-slider').slick({         
            slidesToShow: 1,         
             slidesToScroll: 1,         
             dots: true,         
             arrows: true,         
             autoplay: true, 
             fade: true,        
             autoplaySpeed: 5000,         
             responsive: [         
                       {         
                         breakpoint: 480,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       },            
                       {         
                         breakpoint: 768,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       },
                       {         
                         breakpoint: 1200,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       }         
                      ]          
            });         
         });         
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
         
           $('.weekly-slider').slick({         
            slidesToShow: 1,         
             slidesToScroll: 1,         
             dots: true,         
             arrows: true,         
             autoplay: true,         
             autoplaySpeed: 3000,         
             responsive: [         
                       {         
                         breakpoint: 480,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       },            
                       {         
                         breakpoint: 768,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       },
                       {         
                         breakpoint: 1200,         
                         settings: {         
                           slidesToShow: 1,         
                           slidesToScroll: 1         
                         }         
                       }         
                      ]          
            });         
         });         
      </script>
      <script type="text/javascript">
         $('.btn-at-resp').on('click',function(){
            $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
            
        });
      </script>
@endpush
