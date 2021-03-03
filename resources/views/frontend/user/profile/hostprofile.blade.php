@extends('frontend.layouts.app')

@section('title', __('My Account'))

@push('after-style')
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
@endpush

@section('content')
<!-- Inner Page Breadcrumb -->
      <section class="inner_page_breadcrumb" style="background-position: center;">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 offset-xl-3 text-center">
                  <div class="breadcrumb_content">
                     <h4 class="breadcrumb_title">Host Profile</h4>
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Host Profile</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Main Blog Post Content -->
      <!-- Modal -->
      <div class="modal modal-view-11 fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Description</h4>
                  <button type="button" class="btn btn-view-img">View Image/Video</button>
                  <button type="button" class="btn btn-default close-det" data-dismiss="modal"><i class="fa fa-close"></i></button>
               </div>
               <div class="modal-body">
                  <div class="desc-head">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
                  <div class="md_rg md_rg11">
                     <ul class="list-group p-3">
                        <div class="form-row">
                           <div class="form-group col-md-6 mb-0">
                              <i class="fa fa-calendar"></i>
                              <input type="text" id="pickup_date" class="form-control datetimepicker-input" data-target="#pickup_date" placeholder="Select Date" name="pickup_date">
                           </div>
                           <div class="form-group col-md-6 timepick mb-0">
                              <i class="fa fa-clock-o"></i>
                              <select class="form-control" placeholder="Select Time">
                                 <option value="11:00">11:00</option>
                                 <option value="11:30">11:30</option>
                                 <option value="12:00">12:00</option>
                                 <option value="12:30">12:30</option>
                                 <option value="13:00">13:00</option>
                                 <option value="13:30">13:30</option>
                                 <option value="14:00">14:00</option>
                                 <option value="14:30">14:30</option>
                                 <option value="15:00">15:00</option>
                                 <option value="15:30">15:30</option>
                                 <option value="16:00">16:00</option>
                                 <option value="16:30">16:30</option>
                                 <option value="17:00">17:00</option>
                                 <option value="17:30">17:30</option>
                                 <option value="18:00">18:00</option>
                                 <option value="18:30">18:30</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6 mb-0">
                              <div class="dropdown">
                                 <input type="text" size="25" value="1 Adults" id="count" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                 <a href=""><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                 <ul class="dropdown-menu default-menu" aria-labelledby="dropdownMenu1">
                                    <div class="in_lb"> Adults</div>
                                    <div class="in_lb">Children</div>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </ul>
                  </div>
               </div>
               <div class="modal-footer">
                  <a href="https://dreamcrowd.tjcg.in/design/popup.html"><button type="button" class="btn btn-primary" id="">Contact Host</button></a>
                  <a href="https://dreamcrowd.tjcg.in/design/popup.html"><button type="button" class="btn btn-primary" id="">Book Now</button></a>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header nw_hd">
               </div>
               <div class="modal-body new_secpart">
                  <div class="new_sec">
                     <div class="mod_top">
                        <h1>Confirm and pay</h1>
                        <h4>Special offer:20% off this home</h4>
                        <p>This host is offering a one-time deal to the first 3 guests who book a trip between now and 1 Dec.</p>
                     </div>
                     <div class="mod_mid">
                        <h2>Your trip</h2>
                        <div class="mod_inner">
                           <div class="mod_lf">
                              <h3>Dates</h3>
                              <input type="text" name="">
                           </div>
                           <!-- <div class="modal_right">
                              <a href="">Edit</a>
                              </div> -->
                        </div>
                        <div class="mod_inner">
                           <div class="mod_lf">
                              <h3>Guests</h3>
                              <input type="text" name="">
                           </div>
                           <!-- <div class="modal_right">
                              <a href="">Edit</a>
                              </div> -->
                        </div>
                        <div class="mo_work">
                           <h4>Is this a work trip?</h4>
                        </div>
                        <div class="pay_in">
                           <h2>Pay with</h2>
                           <select name="" value="">
                              <option name="" value="">Credit or Debit Card</option>
                              <option name="" value="">Credit or Debit Card</option>
                           </select>
                           <a href="">Enter a coupon</a>
                        </div>
                        <div class="mod_req">
                           <h2>Required for your trip</h2>
                           <div class="req_page">
                              <div class="req_lf">
                                 <h3>Message the host</h3>
                                 <p>Let the host know why you're travelling and when you'|| check in.</p>
                              </div>
                              <div class="req_rg">
                                 <button class="">Add</button>
                              </div>
                           </div>
                           <div class="req_page">
                              <div class="req_lf">
                                 <h3>Phone Number</h3>
                                 <p>Add and confirm your phone number to get trip upadates.</p>
                              </div>
                              <div class="req_rg">
                                 <button class="">Add</button>
                              </div>
                           </div>
                           <button>Confirm and pay</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer lst_sec">
                  <a href="https://dreamcrowd.tjcg.in/design/details.html"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
               </div>
               </form>
            </div>
         </div>
      </div>
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header nw_hd">
               </div>
               <div class="modal-body new_secpart">
                  <div class="new_sec">
                     <div class="mod_top">
                        <h1>Confirm and pay</h1>
                        <h4>Special offer:20% off this home</h4>
                        <p>This host is offering a one-time deal to the first 3 guests who book a trip between now and 1 Dec.</p>
                     </div>
                     <div class="mod_mid">
                        <h2>Your trip</h2>
                        <div class="mod_inner">
                           <div class="mod_lf">
                              <h3>Dates</h3>
                              <input type="text" name="">
                           </div>
                           <!-- <div class="modal_right">
                              <a href="">Edit</a>
                              </div> -->
                        </div>
                        <div class="mod_inner">
                           <div class="mod_lf">
                              <h3>Guests</h3>
                              <input type="text" name="">
                           </div>
                           <!-- <div class="modal_right">
                              <a href="">Edit</a>
                              </div> -->
                        </div>
                        <div class="mo_work">
                           <h4>Is this a work trip?</h4>
                        </div>
                        <div class="pay_in">
                           <h2>Pay with</h2>
                           <select name="" value="">
                              <option name="" value="">Credit or Debit Card</option>
                              <option name="" value="">Credit or Debit Card</option>
                           </select>
                           <a href="">Enter a coupon</a>
                        </div>
                        <div class="mod_req">
                           <h2>Required for your trip</h2>
                           <div class="req_page">
                              <div class="req_lf">
                                 <h3>Message the host</h3>
                                 <p>Let the host know why you're travelling and when you'|| check in.</p>
                              </div>
                              <div class="req_rg">
                                 <button class="">Add</button>
                              </div>
                           </div>
                           <div class="req_page">
                              <div class="req_lf">
                                 <h3>Phone Number</h3>
                                 <p>Add and confirm your phone number to get trip upadates.</p>
                              </div>
                              <div class="req_rg">
                                 <button class="">Add</button>
                              </div>
                           </div>
                           <button>Confirm and pay</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer lst_sec">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
               </form>
            </div>
         </div>
      </div>
      
      <section class="blog_post_container our-team">
         <div class="container">
            <div class="row">
               <div class="col-md-4 order-md-12 pl10 pr10">
                  <div class="main_blog_post_widget_list" id="bookingTab">
                     <div class="shortcode_widget_tab">
                        <div class="ui_kit_tab">
                           <ul class="nav nav-tabs" id="myTab" role="tablist">

                              <li class="nav-item" onclick="return actives(3)">
                                 <span class="que_inn" id="thr">
                                    
                                    <div class="tooltip-content" style="display:none;">
                                       Tooltip Content
                                    </div>
                                 </span>
                                 <a class="nav-link" id="bookingTab3" data-toggle="tab" href="#book-tab3" role="tab" aria-controls="book-tab3" aria-selected="false">1 - to - 1 Booking</a>
                              </li>
                              <li class="nav-item" onclick="return actives(2)">
                                 <span class="que_inn" id="sec">
                                    
                                    <div class="tooltip-content" style="display:none;">
                                       Tooltip Content
                                    </div>
                                 </span>
                                 <a class="nav-link active" id="bookingTab2" data-toggle="tab" href="#book-tab2" role="tab" aria-controls="book-tab2" aria-selected="false">Group Booking</a>
                              </li>                              
                              <li class="nav-item" onclick="return actives(1)">
                                 <span class="que_inn" id="frs">
                                    
                                    <div class="tooltip-content" style="display:none;">
                                       Tooltip Content
                                    </div>
                                 </span>
                                 <a class="nav-link" id="bookingTab1" data-toggle="tab" href="#book-tab1" role="tab" aria-controls="book-tab1" aria-selected="true">Universal Booking</a>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent">
                              <div class="blog_category_widget tab-pane fade p-0" id="book-tab1" role="tabpanel" aria-labelledby="bookingTab1">
                                 <ul class="list-group p-3 nw_li">
                                    <div class="ui_kit_radiobox w-100">
                                       <div class="radio nw_re">
                                          <input id="radio_one" name="radio" type="radio" checked="">
                                          <label for="radio_one"><span class="radio-label"></span>One-Off Payment</label>
                                       </div>
                                       <div class="radio nw_re">
                                          <input id="radio_two" name="radio" type="radio" checked="">
                                          <label for="radio_two"><span class="radio-label"></span>Subscription</label>
                                       </div>
                                       <div class="radio nw_re">
                                          <input id="radio_three" name="radio" type="radio" checked="">
                                          <label for="radio_three"><span class="radio-label"></span>See FAQ for booking descriptions’</label>
                                       </div>
                                    </div>
                                 </ul>
                                 <ul class="list-group p-3 scroll-cnt">
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_one" name="radio" type="radio" checked="">
                                             <label for="radio_one">
                                                How to cook Italian
                                                pasta and meatballs
                                                .<br>
                                                <h5>Duration: 1 hour</h5><!-- 
                                                <a href="#" class="tdu ml-3" data-toggle="modal" data-target="#myModal1">View Details & Dates</a> -->
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$2000 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_two" name="radio" type="radio" checked="">
                                             <label for="radio_two">
                                                How to cook Italian
                                                pasta and meatballs
                                                <br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$200 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_three" name="radio" type="radio" checked="">
                                             <label for="radio_three">
                                                How to Play Piano  in 60 minutes.<br>
                                                <h5>Duration: 1 hour</h5>
                                            </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_four" name="radio" type="radio" checked="">
                                             <label for="radio_four">
                                                How to Play Piano<br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_five" name="radio" type="radio" checked="">
                                             <label for="radio_five">
                                                How to Play Piano<br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="blog_category_widget tab-pane fade show active p-0" id="book-tab2" role="tabpanel" aria-labelledby="bookingTab2">
                                 <ul class="list-group p-3 nw_li">
                                    <div class="ui_kit_radiobox w-100">
                                       <div class="radio nw_re">
                                          <input id="radio_21" name="radio" type="radio" checked="">
                                          <label for="radio_21"><span class="radio-label"></span>One-Off Payment</label>
                                       </div>
                                       <div class="radio nw_re">
                                          <input id="radio_22" name="radio" type="radio" checked="">
                                          <label for="radio_22"><span class="radio-label"></span>Subscription</label>
                                       </div>
                                       <div class="radio nw_re">
                                          <input id="radio_33" name="radio" type="radio" checked="">
                                          <label for="radio_33"><span class="radio-label"></span>See FAQ for booking descriptions</label>
                                       </div>
                                    </div>
                                 </ul>
                                 <ul class="list-group p-3 scroll-cnt">
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_21" name="radio" type="radio" checked="">
                                             <label for="radio_21">
                                                Learn to Play Piano in 60 minites.<br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_22" name="radio" type="radio" checked="">
                                             <label for="radio_22">
                                                How to Play Piano<br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_23" name="radio" type="radio" checked="">
                                             <label for="radio_23">
                                                How to cook Italian
                                                pasta and meatballs. <br>

                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="blog_category_widget tab-pane fade p-0" id="book-tab3" role="tabpanel" aria-labelledby="bookingTab3">
                                 <ul class="list-group p-3 nw_li">
                                    <div class="form-row">
                                       <div class="form-group col-md-12 mb-0">
                                          <!-- <i class="flaticon-user"></i> -->
                                          <label class="nw_sel">Select Type Of Experience :</label>
                                          <select class="btn dbxshad btn-md btn-thm rounded w-100 select-pay" placeholder="Select pays">
                                             <option value="Pay As You Go">One-Off Payment</option>
                                             <option value="Subscription">Subscription</option>
                                             <option value="Subscription">See FAQ for booking descriptions</option>
                                          </select>
                                       </div>
                                    </div>
                                 </ul>
                                 <ul class="list-group p-3 scroll-cnt">
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_31" name="radio" type="radio" checked="">
                                             <label for="radio_31">
                                                Learn to Play Piano in 60 minutes.<br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_32" name="radio" type="radio" checked="">
                                             <label for="radio_32">
                                                How to Play Piano<br>
                                                <br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_33" name="radio" type="radio" checked="">
                                             <label for="radio_33">How to cook Italian
                                                pasta and meatballs
                                                <h5>Duration: 1.5 hour</h5>
                                            </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_34" name="radio" type="radio" checked="">
                                             <label for="radio_34">
                                                How to Play Piano<br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                       <div class="ui_kit_radiobox w-100">
                                          <div class="radio">
                                             <input id="radio_35" name="radio" type="radio" checked="">
                                             <label for="radio_35">
                                                How to Play Piano<br>
                                                <h5>Duration: 1 hour</h5>
                                             </label>
                                          </div>
                                          <span class="float-right">
                                             <h4>$20 per person</h4>
                                             <a href="#"><button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100" data-toggle="modal" data-target="#myModal1">View</button></a>
                                          </span>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 order-md-1 det-avtar">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="blog_slider_home1">
                           <div class="item">
                              <div class="main_blog_post_content">
                                 <div class="mbp_thumb_post">
                                    <div class="thumb">
                                       <img class="img-fluid" src="images/blog/12.jpg" alt="12.jpg">
                                       <!-- <div class="tag">Marketing</div> -->
                                       <div class="post_date">
                                          <h2>28</h2>
                                          <span>DECEMBER</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="main_blog_post_content">
                                 <div class="mbp_thumb_post">
                                    <div class="thumb">
                                       <img class="img-fluid" src="images/blog/1.jpg" alt="1.jpg">
                                       <!-- <div class="tag">Marketing</div> -->
                                       <div class="post_date">
                                          <h2>28</h2>
                                          <span>DECEMBER</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="main_blog_post_content">
                           <div class="mbp_thumb_post">
                              <div class="details">
                                 <div class="creators-avatar">
                                    <img class="img-fluid" src="images/testimonial/4.jpg" alt="4.jpg">
                                 </div>
                                 <h3>Cooking classes with Sheera Lee</h3>
                                 <a href="">
                                 <button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100">Contact Host</button></a>
                                 <ul class="post_meta">
                                    <li><a href="#"><span class="fa fa-map-marker"></span></a></li>
                                    <li><a href="#"><span>London, United Kingdom</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="courses_single_container">
                           <div class="cs_row_two">
                              <div class="cs_overview">
                                 <ul class="cs_course_syslebus">
                                    <li>
                                       <i class="flaticon-elearning-1"></i>
                                       <p>Online Experience</p>
                                    </li>
                                    <li>
                                       <i class="fa fa-language"></i>
                                       <p>Hosted in English</p>
                                    </li>
                                    <li>
                                       <i class="flaticon-clock"></i>
                                       <p>Multiple booking options</p>
                                    </li>
                                    <li>
                                       <i class="flaticon-user"></i>
                                       <p>Can arrange group bookings for 80+ guests</p>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="cs_row_two">
                              <div class="cs_overview">
                                 <h4 class="title">About me</h4>
                                 <ul class="bs_content_list">
                                    <li>
                                       <p>You will need a copy of Adobe XD 2019 or above. A free trial can be downloaded from Adobe.</p>
                                    </li>
                                    <li>
                                       <p>No previous design experience is needed.</p>
                                    </li>
                                    <li>
                                       <p>No previous Adobe XD skills are needed.</p>
                                    </li>
                                 </ul>
                                 <div class="mbp_blockquote">
                                    <div class="blockquote">
                                       <span class="font-italic"><i class="fa fa-quote-left"></i></span><em class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's a type specimen book.</em>
                                    </div>
                                 </div>
                                 <p class="mb25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                 <p class="mb25">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                              </div>
                           </div>
                           <div class="cs_row_two">
                              <div class="cs_overview">
                                 <h4 class="title">What to Bring</h4>
                                 <h4 class="subtitle">Some of my Classes/Activities</h4>
                                 <ul class="list_requiremetn list-requiremetn-nw">
                                    <li>
                                       <h6>Learn how to play the guitar in 60 minutes</h6>
                                       <p>If you have never played a guitar, then this one is for you. I will take you through a step-by-step guide for guitar…(read more)</p>
                                    </li>
                                    <li>
                                       <h6>Improve your guitar technique in 60 minutes</h6>
                                       <p>If you have played a guitar but still at a beginner level, then this package is for you. You will learn all about the stri.. (read more)</p>
                                    </li>
                                    <li>
                                       <h6>Weekly or Monthly guitar lessons from a music expert</h6>
                                       <p>This package is for those interested in becoming an advanced guitar player. I will teach you the basic and move… (read more)</p>
                                    </li>
                                    <li>
                                       <h6>Monthly guitar performances from my band.</h6>
                                       <p>Enjoy a live packed entertainment from myself and my band. We will play you various songs from our albums ri..(read more)</p>
                                    </li>
                                 </ul>
                                 <h4 class="title">
                                     Booking Details & Instructions
                                 </h4>
                                 <h4 class="subtitle">
                                     After booking a class or activity, you will be emailed a Zoom streaming link along with instructions on how to attend the experience.
                                 </h4>
                                 <ul class="list_requiremetn">
                                     <li>
                                        <p>After booking a class or activity, you will be emailed a Zoom streaming link along with instructions on how to attend the experience.</p> 
                                     </li>
                                     <li>
                                         <p>
                                             You can cancel your booking anytime up to 24 hours before the experience starts for free.
                                         </p>
                                     </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="cs_row_two">
                              <div class="cs_overview">
                                 <h4 class="title">How to Join Zoom</h4>
                                 <ul class="list_requiremetn">
                                    <li>
                                       <i class="fa fa-circle"></i>
                                       <p>Zoom Video Call: All experiences are in a video call</p>
                                    </li>
                                    <li>
                                       <i class="fa fa-circle"></i>
                                       <p>You will receive a Zoom custom link</p>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="cs_row_two">
                              <div class="cs_overview nw_cls">
                                 <div class="creators-avatar">
                                    <img class="img-fluid" src="https://dreamcrowd1.tjcg.in/themes/front/images/testimonial/5.jpg" alt="5.jpg">
                                 </div>
                                 <h4 class="title">About Me</h4>
                                 <div class="_1fg5h8r">Joined in January 2018</div>
                                 <div class="nw_abut_main">
                                    <div class="abu_lf">
                                       <ul class="tc_review d-none" id="ratings">
                                          <li class="list-inline-item">
                                             <a href="#">
                                             <i class="fa fa-star"></i>
                                             45 Reviews
                                             </a>
                                          </li>
                                          <li class="verify">
                                             <span class="verified">
                                             <img src="https://dreamcrowd1.tjcg.in/themes/front/images/verified.png"> 
                                             </span>Verified
                                          </li>
                                       </ul>
                                       <div class="abt_tit">
                                          <h3>During your stay</h3>
                                          <p>We personally take care of our guests and stay on another cottage on the same farm. We are always available to help you for any requirements.<br>We give you your space and privacy, but are always up for a round of tea and sharing some stories.</p>
                                          <h3>Raajen & Archana is a Superhost</h3>
                                          <p>Superhosts are experienced, highly rated hosts who are committed to providing great stays for guests.</p>
                                       </div>
                                    </div>
                                    <div class="abu_rg">
                                       <ul class="_jofnfy">
                                          <li class="_1q2lt74">Response rate: 100%</li>
                                          <li class="_1q2lt74">Response time: within an hour</li>
                                       </ul>
                                       <a href="">
                                       <button type="button" class="btn dbxshad btn-sm btn-thm rounded w-100">Host</button></a>
                                       <div class="_xms8z">
                                          <div class="_cg8a3u">
                                             <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false" style="height: 24px; width: 24px; display: block; fill: rgb(255, 180, 0);">
                                                <path d="m5 20.5a.5.5 0 0 1 -.5.5h-.5v.5a.5.5 0 0 1 -1 0v-.5h-.5a.5.5 0 0 1 0-1h .5v-.5a.5.5 0 0 1 1 0v .5h.5a.5.5 0 0 1 .5.5zm1.5 1.5a.5.5 0 1 0 .5.5.5.5 0 0 0 -.5-.5zm16-20h-.5v-.5a.5.5 0 0 0 -1 0v .5h-.5a.5.5 0 0 0 0 1h .5v.5a.5.5 0 0 0 1 0v-.5h.5a.5.5 0 0 0 0-1zm-2.58 4.87a13.41 13.41 0 0 1 -6.76-3.2.37.37 0 0 0 -.63.26l.08 16.22a.38.38 0 0 0 .55.32 11.98 11.98 0 0 0 7.07-13.31.37.37 0 0 0 -.31-.3z"></path>
                                                <path d="m14.39 8.32a1.93 1.93 0 0 0 -3.66 0l-2.42 4.85a3.09 3.09 0 0 0 -.4 1.61 2.36 2.36 0 0 0 2.23 2.23 3.95 3.95 0 0 0 2.42-1.06 3.95 3.95 0 0 0 2.42 1.06 2.36 2.36 0 0 0 2.23-2.23 3.09 3.09 0 0 0 -.4-1.61zm-2.72 4.38c0-.05.01-1.23.89-1.23s.88 1.18.88 1.23a3.25 3.25 0 0 1 -.88 1.83 3.25 3.25 0 0 1 -.89-1.83zm3.31 3.31a2.92 2.92 0 0 1 -1.71-.77 4.3 4.3 0 0 0 1.17-2.54 2.02 2.02 0 0 0 -1.8-2.22l-.08-.01a2.02 2.02 0 0 0 -1.89 2.15l.01.08a4.29 4.29 0 0 0 1.17 2.54 2.92 2.92 0 0 1 -1.71.77 1.36 1.36 0 0 1 -1.23-1.23 2.13 2.13 0 0 1 .29-1.16l2.42-4.85c.33-.65.55-.76.94-.76s.61.11.94.76l2.42 4.85a2.13 2.13 0 0 1 .29 1.16 1.36 1.36 0 0 1 -1.23 1.23zm7.01-10.35a.5.5 0 0 0 -.43-.4 13.03 13.03 0 0 1 -8.68-4.57.52.52 0 0 0 -.77 0 13.03 13.03 0 0 1 -8.68 4.57.5.5 0 0 0 -.43.4c-1.58 8.19 1.55 14.02 9.3 17.31a.5.5 0 0 0 .39 0c7.75-3.29 10.87-9.11 9.3-17.31zm-9.49 16.3c-7.1-3.09-9.91-8.25-8.57-15.76a13.98 13.98 0 0 0 8.57-4.43 13.98 13.98 0 0 0 8.57 4.43c1.33 7.51-1.48 12.67-8.57 15.76z" fill="#484848"></path>
                                             </svg>
                                          </div>
                                          <p>To protect your payment, never transfer money or communicate outside of the Airbnb website or app.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="cs_row_three">
                              <div class="course_content">
                                 <div class="cc_headers">
                                    <h4 class="title">FAQ</h4>
                                 </div>
                                 <br>
                                 <div class="details">
                                    <div id="accordion" class="panel-group cc_tab">
                                       <div class="panel">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a href="#panelBodyCourseStart" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">What is Zoom?</a>
                                             </h4>
                                          </div>
                                          <div id="panelBodyCourseStart" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                <ul class="cs_list mb0">
                                                   <li><span class="flaticon-play-button-1 icon"></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="details">
                                    <div id="accordion" class="panel-group cc_tab">
                                       <div class="panel">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a href="#panelBodyCourseBrief" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">How to download the Zoom?</a>
                                             </h4>
                                          </div>
                                          <div id="panelBodyCourseBrief" class="panel-collapse collapse">
                                             <div class="panel-body">
                                                <ul class="cs_list mb0">
                                                   <li><span class="flaticon-play-button-1 icon"></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="cs_row_five">
                              <div class="student_feedback_container">
                                 <h4 class="aii_title">Student feedback</h4>
                                 <div class="s_feeback_content">
                                    <ul class="skills">
                                       <li class="list-inline-item">Stars 5</li>
                                       <li class="list-inline-item progressbar1" data-width="84" data-target="100">%84</li>
                                    </ul>
                                    <ul class="skills">
                                       <li class="list-inline-item">Stars 4</li>
                                       <li class="list-inline-item progressbar2" data-width="9" data-target="100">%9</li>
                                    </ul>
                                    <ul class="skills">
                                       <li class="list-inline-item">Stars 3</li>
                                       <li class="list-inline-item progressbar3" data-width="3" data-target="100">%3</li>
                                    </ul>
                                    <ul class="skills">
                                       <li class="list-inline-item">Stars 2</li>
                                       <li class="list-inline-item progressbar4" data-width="1" data-target="100">%1</li>
                                    </ul>
                                    <ul class="skills">
                                       <li class="list-inline-item">Stars 1</li>
                                       <li class="list-inline-item progressbar5" data-width="2" data-target="100">%2</li>
                                    </ul>
                                 </div>
                                 <div class="aii_average_review text-center">
                                    <div class="av_content">
                                       <h2>4.5</h2>
                                       <ul class="aii_rive_list mb0">
                                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       </ul>
                                       <p>Course Rating</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="cs_row_six">
                              <div class="sfeedbacks">
                                 <h4 class="aii_title">Reviews</h4>
                                 <div class="mbp_pagination_comments">
                                    <div class="mbp_first media csv1">
                                       <img src="images/resource/review1.png" class="mr-3" alt="review1.png">
                                       <div class="media-body">
                                          <h4 class="sub_title mt-0">
                                             Warren Bethell
                                             <span class="sspd_review float-right">
                                                <ul>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"></li>
                                                </ul>
                                             </span>
                                          </h4>
                                          <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                          <p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
                                          <p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p>
                                          <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                          <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                          <div class="custom_hr style2"></div>
                                          <div class="mbp_sub media csv1">
                                             <a href="#"><img src="images/resource/review1.png" class="mr-3" alt="review1.png"></a>
                                             <div class="media-body">
                                                <h4 class="sub_title mt-0">
                                                   Anton Hilton
                                                   <span class="sspd_review float-right">
                                                      <ul>
                                                         <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                         <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                         <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                         <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                         <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                         <li class="list-inline-item"></li>
                                                      </ul>
                                                   </span>
                                                </h4>
                                                <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                                <p class="fz15 mt20 mb50">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the</p>
                                                <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                                <div class="sspd_review_liked">
                                                   <a href="#"><i class="flaticon-like-1"></i><span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="custom_hr"></div>
                                    <div class="mbp_second media csv1">
                                       <img src="images/resource/review1.png" class="align-self-start mr-3" alt="review1.png">
                                       <div class="media-body">
                                          <h4 class="sub_title mt-0">
                                             Warren Bethell
                                             <span class="sspd_review float-right">
                                                <ul>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                   <li class="list-inline-item"></li>
                                                </ul>
                                             </span>
                                          </h4>
                                          <a class="sspd_postdate fz14" href="#">6 months ago</a>
                                          <p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
                                          <p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p>
                                          <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
                                          <div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
                                       </div>
                                    </div>
                                    <div class="text-center mt50">
                                       <div class="custom_hr"></div>
                                       <button type="button" class="more-review-btn btn">See more reviews</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="our-blog pt-0" id="trending">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="main-title text-center">
                     <h1 class="mt0 mb0">You Might Also Like</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="blog_post_slider_home4">
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956318708-09-20.jpeg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Ali Mahan</b></span>
                                    <span><b><i>Cooking</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956301308-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Jay Rank</b></span>
                                    <span><b><i>Singing</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956309808-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Ali Tufan</b></span>
                                    <span><b><i>Dance</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956286008-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Bhargav Patel</b></span>
                                    <span><b><i>Computer</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956294808-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>TJ CG</b></span>
                                    <span><b><i>Music</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956318708-09-20.jpeg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Ali Mahan</b></span>
                                    <span><b><i>Cooking</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956301308-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Jay Rank</b></span>
                                    <span><b><i>Singing</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956309808-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Ali Tufan</b></span>
                                    <span><b><i>Dance</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956286008-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Bhargav Patel</b></span>
                                    <span><b><i>Computer</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956294808-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>TJ CG</b></span>
                                    <span><b><i>Music</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956318708-09-20.jpeg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Ali Mahan</b></span>
                                    <span><b><i>Cooking</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956301308-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Jay Rank</b></span>
                                    <span><b><i>Singing</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956309808-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Ali Tufan</b></span>
                                    <span><b><i>Dance</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956286008-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>Bhargav Patel</b></span>
                                    <span><b><i>Computer</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="item">
                        <a href="https://dreamcrowd1.tjcg.in/design/details.html">
                           <div class="project-card project-card2 mb-4">
                              <div class="thumb">
                                 <img class="img-fluid proImg" src="https://dreamcrowd1.tjcg.in/public/creator_profile/159956294808-09-20.jpg">
                                 <div class="overlay">
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                 </div>
                              </div>
                              <div class="project-info">
                                 <div class="gig-info">
                                    <span style="color: #FF5A5F"><b>TJ CG</b></span>
                                    <span><b><i>Music</i></b></span>
                                    <span><b>From €32</b>/person</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection

@push('after-scripts')
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
         $(window).scroll(function(){  
             var topHeight = $('section.inner_page_breadcrumb').outerHeight();
             if ($(this).scrollTop() > topHeight && $(window).width() > 767) {  
                $('#bookingTab').addClass('fixed'); 
             } else{
                $('#bookingTab').removeClass('fixed');  
             }   
         });  
         
            jQuery(document).ready(function () {
                $('#pickup_date, #pickup_date2, #pickup_date3').datepicker({
                 format: 'yyyy-mm-dd',
                 startDate: new Date(),
                 autoclose: true
                }); 
            }); 
         
         $('.btn-default').on('click',function(){
                $('.default-menu').slideToggle()
                $('.dropdown-overlay').show()
            });
            $('.dropdown-overlay').on('click',function(){
              $('.default-menu').hide(); 
              $(this).hide();
            });
         
            $('.btn-danger').on('click',function(){
              $('.slide-menu').slideToggle();
              $('.dropdown-overlay').show();
            })
            $('.dropdown-overlay').on('click',function(){
              $('.slide-menu').hide();
              $(this).hide();
            })  
         
            //set button id on click to hide first modal
            $("#signin").on( "click", function() {
                $('#myModal1').modal('show');  
            });
            //trigger next modal
            $("#signin").on( "click", function() {
                $('#myModal2').modal('show');  
            });
            //trigger next modal
            $("#signin").on( "click", function() {
                $('#myModal3').modal('show');  
            }); 
         
         function actives($n) {
            if ($n == 1) 
            {
                $('#frs').addClass('show');
                $('#sec').removeClass('show');
                $('#thr').removeClass('show');
            }
            else if($n == 2)
            {
                $('#frs').removeClass('show');
                $('#sec').addClass('show');
                $('#thr').removeClass('show');
            }
            else
            {
                $('#frs').removeClass('show');
                $('#sec').removeClass('show');
                $('#thr').addClass('show');
            }
         }
         
            $(function () {
              $('[data-toggle="tooltip"]').tooltip({trigger:'click'})
            }) 
         
         
            $(document).ready(function(){
                // $('#frs').click(function(){
                //     $(this).parent().find(".tooltip-content").fadeToggle();
                // });
         
                $('#sec').click(function(){
                    $(this).parent().find(".tooltip-content").fadeToggle();
                });
         
                $('#thr').click(function(){
                    $(this).parent().find(".tooltip-content").fadeToggle();
                });
         
                $("#frs").click(function(e){    
                    //$(this).children('.moreContent').css('display', 'block');
                    if($(this).children('.tooltip-content').css("display") == 'none'){
                        $(this).children('.tooltip-content').css("display","block");
                    } else {
                        $(this).children('.tooltip-content').css("display","none");
                    }
                });  
         
                //hide it when clicking anywhere else except the popup
                $(document).on('click', function(event) {
                    if (!$(event.target).parents().addBack().is('#frs')) {
                        $('.tooltip-content').hide();
                    } 
                }); 
                // Stop propagation to prevent hiding "#tooltip" when clicking on it
                $('#frs').on('click', function(event) {
                    event.stopPropagation();
                }); 
            });
         
      </script>
@endpush