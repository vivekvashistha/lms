<!DOCTYPE html>
<html dir="ltr" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
        <title>{{ appName() }} | @yield('title')</title>
        <meta name="description" content="@yield('meta_description', appName())">
        <meta name="author" content="@yield('meta_author', '-')">
        @yield('meta')

        @stack('before-styles')
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        @stack('after-styles')
        <livewire:styles />
    <!-- Favicon -->
      <link href="images/favicon.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
      <link href="images/favicon.png" sizes="128x128" rel="shortcut icon" />

   </head>
   <body>
      <div class="wrapper">
         <div class="preloader"></div>
         <!-- Main Header Nav -->
         <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
            <div class="container-fluid">
               <!-- Ace Responsive Menu -->
               <nav>
                  <!-- Menu Toggle btn-->
                  <div class="menu-toggle">
                     <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
                     <button type="button" id="menu-btn">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <a href="index.html" class="navbar_brand float-left dn-smd">
                  <img class="logo1 img-fluid" src="images/logo/header-logo2.png" alt="header-logo.png">
                  <img class="logo2 img-fluid" src="images/logo/header-logo2.png" alt="header-logo2.png">
                  <span>dreamcrowd</span>
                  </a>
                  <!-- Responsive Menu Structure-->
                  <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                  <div class="ht_left_widget home5 float-left">
                     <ul>
                        <li class="list-inline-item">
                           <div class="header_top_lang_widget">
                              <div class="ht-widget-container">
                                 <div class="vertical-wrapper">
                                    <h2 class="title-vertical home5">
                                       <span class="text-title">Categories</span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
                                    </h2>
                                    <div class="content-vertical home5">
                                       <div id="vertical-menu" class="row mega-vertical-menu caeg-alll">
                                          <div class="col-md-8 vertical-menu-drop-lft">
                                             <h6 class="nav-head-3">Classes and Activities [Online Experiences]</h6>
                                             <div class="nav-of-menus">
                                                <ul id="" class="mega-vertical-menu nav navbar-nav">
                                                   <li><a href="#">Art Classes</a></li>
                                                   <li><a href="#">Cooking Classes</a></li>
                                                   <li><a href="#">Music Classes</a></li>
                                                   <li><a href="#">Filmmaking Classes</a></li>
                                                   <li><a href="#">Dance Classes</a></li>
                                                   <li><a href="#">Photography Classes</a></li>
                                                   <li><a href="#">Yoga Classes</a></li>
                                                   <li><a href="#">Creative Performances Classes</a></li>
                                                </ul>
                                                <ul id="" class="mega-vertical-menu nav navbar-nav">
                                                   <li><a href="#">Business Analytics</a></li>
                                                   <li><a href="#">Freelance and Enterpreneurship</a></li>
                                                   <li><a href="#">Leadership and Management</a></li>
                                                   <li><a href="#">Marketing</a></li>
                                                   <li><a href="#">Lifestyle</a></li>
                                                   <li><a href="#">Productivity</a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-md-4 vertical-menu-drop-rht">
                                             <ul id="" class="mega-vertical-menu nav navbar-nav">
                                                <li><a href="#">All Experiences</a></li>
                                                <li><a href="#">Recommended Classes</a></li>
                                                <li><a href="#">StudentProjects</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="list-inline-item ">
                           <div class="ht_search_widget">
                              <div class="header_search_widget">
                                 <form class="form-inline mailchimp_form">
                                    <input type="email" class="dn-lg form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Search for a class, activity or a host">
                                    <button type="submit" class="btn btn-primary mb-2 btn-at-resp"><span class="flaticon-magnifying-glass"></span></button>
                                 </form>
                              </div>
                           </div>
                        </li>
                        <li class="list-inline-item list_s dn-1440 dn">
                           <div class="search_overlay home5">
                              <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                              <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                              </a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="sign_up_btn float-right dn-smd mt20">
                     <li class="list-inline-item become-host">
                        <a href="#" class="">
                        <i class="flaticon-like pr5"></i>
                        Wishlist
                        </a>
                     </li>
                     @if(!Auth::check())
                     <li class="list-inline-item become-host">
                        <a href="#" class="">
                        Become a Host
                        </a>
                     </li>
                     <li class="list-inline-item">
                        <a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter-login">
                        <i class="flaticon-user pr5"></i> 
                        <span class="dn-lg">Login</span>
                        </a>
                     </li>
                     <li class="list-inline-item btn-regiser">
                        <a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter-register">
                        <i class="flaticon-edit pr5"></i> 
                        <span class="dn-lg">Sign Up</span>
                        </a>
                     </li>
                     @endif
                     @if(Auth::check())
                     <li class="list-inline-item">
                        <a href="/profile" class="btn btn-md">
                        <i class="flaticon-user pr5"></i> 
                        <span class="dn-lg">Account: {{ Auth::user()->name }}</span>
                        </a>
                     </li>
                     <li class="list-inline-item btn-regiser">
                        <x-utils.link
                                :text="__('Logout')"
                                class="dropdown-item"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <x-slot name="text">
                                    @lang('Logout')
                                    <x-forms.post :action="route('frontend.auth.logout')" id="logout-form" class="d-none" />
                                </x-slot>
                            </x-utils.link>
                        
                        </a>
                     </li>

                     @endif
                  </ul>
                  <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                     <li class="last">
                        <a href="#"><span class="title">GBP (£)</span></a>
                        <ul>  
                           <li><a href="#">GBP (£)</a></li>                         
                           <li><a href="#">USD ($)</a></li>
                           <li><a href="#">EUR (€)</a></li>                           
                           <li><a href="#">CAD ($)</a></li>
                           <li><a href="#">CHF (CHf)</a></li>
                           <li><a href="#">AUD ($)</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
            </div>
         </header>
         <!-- Modal -->
         <div class="sign_up_modal modal fade" id="exampleModalCenter-login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <!-- 
                     <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                        </li>
                     </ul> -->
                  <div class="" id="myTabContent">
                     <div class="" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="login_form">
                          <x-forms.post :action="route('frontend.auth.login')">
                              <div class="heading">
                                 <h3 class="text-center">Login to your account</h3>
                                 <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                              </div>
                              <div class="form-wid">
                                 <div class="form-group">
                                    <input type="email" name="email" id="email"  class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autofocus autocomplete="email">
                                 </div>
                                 <div class="form-group">
                                   <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password" />
                                 </div>
                                 <div class="form-group custom-control custom-checkbox">
                                    <input name="remember" id="remember" class="custom-control-input" type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                                    <label class="custom-control-label" for="remember">Remember me</label>
                                    <x-utils.link :href="route('frontend.auth.password.request')" class="tdu btn-fpswd float-right" :text="__('Forgot Your Password?')" />
                                 </div>
                                 <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                              </div>
                              <hr>
                              <h6 class="or-text">or</h6>
                              <div class="row mt15 social-icons">
                                 <div class="col-lg fb-f">
                                    <button type="submit" class="btn btn-social bg-fb-social">
                                    <img src="images/Social-Facebook.png" alt="Facebook">
                                    </button>
                                    <button type="submit" class="btn -social bg-google-social">
                                    <img src="images/Social-Google.png" alt="Google">
                                    </button>
                                 </div>
                              </div>
                           </x-forms.post>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="sign_up_modal modal fade" id="exampleModalCenter-register" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="" id="myTabContent2">
                     <div class="" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="sign_up_form">
                           <div class="heading">
                              <h3 class="text-center">Create New Account</h3>
                              <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                           </div>
                           <x-forms.post :action="route('frontend.auth.register')">
                              <div class="form-wid">
                                 <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="{{ __('Name') }}" maxlength="100" required autofocus autocomplete="name" />
                                 </div>
                                 <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autocomplete="email" />
                                 </div>
                                 <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="new-password" />
                                 </div>
                                 <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Password Confirmation') }}" maxlength="100" required autocomplete="new-password" />
                                 </div>
                                 <div class="form-group">
                                    <select required name="role" id="role" class="form-control">
                                        <option value="customer">As a Customer</option>
                                        <option value="instructor">As a Instructor</option>
                                    </select>
                                    
                                 </div>
                                 <div class="form-group custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" id="exampleCheckN"> -->
                                    <input type="checkbox" name="terms" value="1" id="terms" class="custom-control-input" required>
                                    <label class="custom-control-label" for="terms">I would like to be notified of exclusive offers, host recommendations and useful contents from Dreamcrowd.</label>
                                 </div>
                                 <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                                 <div class="hr-mg">
                                    <hr>
                                    <h6 class="or-text">or</h6>
                                 </div>
                                 <div class="row mt15 social-icons">
                                    <div class="col-lg fb-f">
                                       <button type="submit" class="btn btn-social bg-fb-social">
                                       <img src="images/Social-Facebook.png" alt="Facebook">
                                       </button>
                                       <button type="submit" class="btn -social bg-google-social">
                                       <img src="images/Social-Google.png" alt="Google">
                                       </button>
                                    </div>
                                 </div>
                                 <div class="secondary-text agree-txt">
                                    By signing up, you agree to our <a href="#" target="_blank" rel="">Terms of Use</a> and <a href="#" target="_blank" rel="">Privacy Policy</a>.
                                 </div>
                                 
                              </div>
                           </x-forms.post>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Search Button Bacground Overlay -->
         <div class="search_overlay dn-992">
            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
               <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
               <div id="mk-fullscreen-search-wrapper">
                  <form method="get" id="mk-fullscreen-searchform">
                     <input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Search for a class, activity or a host">
                     <button type="submit" class="btn btn-primary"><span class="flaticon-magnifying-glass"></span></button>
                  </form>
               </div>
            </div>
         </div>
         <!-- Main Header Nav For Mobile -->
         <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
               <div class="header stylehome1">
                  <div class="main_logo_home2">
                     <img class="nav_logo_img img-fluid float-left mt20" src="images/logo/header-logo.png" alt="header-logo.png">
                     <span>dreamcrowd</span>
                  </div>
                  <ul class="menu_bar_home2">
                     <li class="list-inline-item">
                        <div class="search_overlay">
                           <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                              <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                           </a>
                           <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                              <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                              <div id="mk-fullscreen-search-wrapper2" class="serch-responsive">
                                 <form method="get" id="mk-fullscreen-searchform2" class="header_search_widget">
                                    <input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Search for a class, activity or a host">
                                    <button type="submit" class="btn btn-primary"><span class="flaticon-magnifying-glass"></span></button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                  </ul>
               </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
               <ul>
                  <li class="">                    
                     <span class="">Categories</span>  
                        <ul class=""> 
                                                    
                              <li><a href="#">Art Classes</a></li>
                              <li><a href="#">Cooking Classes</a></li>
                              <li><a href="#">Music Classes</a></li>
                              <li><a href="#">Filmmaking Classes</a></li>
                              <li><a href="#">Dance Classes</a></li>
                              <li><a href="#">Photography Classes</a></li>
                              <li><a href="#">Yoga Classes</a></li>
                              <li><a href="#">Creative Performances Classes</a></li>
                           
                              <li><a href="#">Business Analytics</a></li>
                              <li><a href="#">Freelance and Enterpreneurship</a></li>
                              <li><a href="#">Leadership and Management</a></li>
                              <li><a href="#">Marketing</a></li>
                              <li><a href="#">Lifestyle</a></li>
                              <li><a href="#">Productivity</a></li>                           
                        
                              <li><a href="#">All Experiences</a></li>
                              <li><a href="#">Recommended Classes</a></li>
                              <li><a href="#">StudentProjects</a></li>
                        </ul>
                     
                  </li>
                  <li>
                     <span>GBP (£)</span>
                     <ul>
                           <li><a href="#">GBP (£)</a></li>
                           <li><a href="#">USD ($)</a></li>
                           <li><a href="#">EUR (€)</a></li>                           
                           <li><a href="#">CAD ($)</a></li>
                           <li><a href="#">CHF (CHf)</a></li>
                           <li><a href="#">AUD ($)</a></li>
                     </ul>
                  </li>
                  <li class="become-host">
                     <a href="#" class="">
                     <i class="flaticon-like pr5"></i>
                     Wishlist
                     </a>
                  </li>
                  @if(!Auth::check())
                  <li class="become-host">
                     <a href="#" class="">
                     Become a Host
                     </a>
                  </li>

                  <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter-login"><span class="flaticon-user"></span> Login1</a></li>
                  <li><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter-register"><span class="flaticon-edit"></span> Register1</a></li>
                  @endif
                  @if(Auth::check())
                  <li class="become-host">
                     <a href="#" class="">
                      {{ Auth::user()->name }}
                     </a>
                  </li>
                  <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter-login"><span class="flaticon-user"></span> Login</a></li>
                  <li><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter-register"><span class="flaticon-edit"></span> Register1</a></li>
                  @endif
               </ul>
            </nav>
         </div>

        
            @yield('content')
        
    <!-- Our Footer -->
         <section class="footer_one footer_wh">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6 col-md-3">
                     <div class="footer_company_widget">
                        <h4>Dreamcrowd</h4>
                        <ul class="list-unstyled">
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">How it works</a></li>
                           <li><a href="#">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="footer_company_widget">
                        <h4>Guest/Student</h4>
                        <ul class="list-unstyled">
                           <li><a href="#">Sign up</a></li>
                           <li><a href="#">FAQ</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="footer_program_widget">
                        <h4>Host/Teacher</h4>
                        <ul class="list-unstyled">
                           <li><a href="#">Sign up</a></li>
                           <li><a href="#">FAQ</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                     <div class="footer_support_widget">
                        <h4>Browse Experiences</h4>
                        <ul class="list-unstyled">
                           <li><a href="#">Art & Design</a></li>
                           <li><a href="#">Cooking & Baking</a></li>
                           <li><a href="#">Dance & Fitness</a></li>
                           <li class="view-all-link"><a href="#">View all</a></li>
                           <!-- <li><a href="#">Filming & Photography</a></li>
                              <li><a href="#">Magic & Games</a></li>
                              <li><a href="#">Travel & Languages</a></li>
                              <li><a href="#">Hobbies & Lifestyle</a></li> -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Our Footer Middle Area -->
         <section class="footer_middle_area p0 footer_wh">
            <div class="container">
               <div class="row">
                  <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                     <div class="logo-widget home1">
                        <img class="img-fluid" src="images/logo/header-logo2.png" alt="header-logo.png">
                     </div>
                  </div>
                  <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                     <div class="footer_menu_widget">
                        <ul>
                           <li class="list-inline-item"><a href="#">Home</a></li>
                           <li class="list-inline-item"><a href="#">Privacy</a></li>
                           <li class="list-inline-item"><a href="#">Terms</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                     <div class="footer_social_widget mt15">
                        <ul>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Our Footer Bottom Area -->
         <section class="footer_bottom_area pt25 pb25 footer_wh">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                     <div class="copyright-widget text-center">
                        <p>Copyright Dreamcrowd © 2021. All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
      </div>

    @stack('before-scripts')
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
      <script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
      <script type="text/javascript" src="js/ace-responsive-menu.js"></script>
      <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="js/isotop.js"></script>
      <script type="text/javascript" src="js/snackbar.min.js"></script>
      <script type="text/javascript" src="js/simplebar.js"></script>
      <script type="text/javascript" src="js/parallax.js"></script>
      <script type="text/javascript" src="js/scrollto.js"></script>
      <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
      <script type="text/javascript" src="js/jquery.counterup.js"></script>
      <script type="text/javascript" src="js/wow.min.js"></script>
      <script type="text/javascript" src="js/progressbar.js"></script>
      <script type="text/javascript" src="js/slider.js"></script>
      <script type="text/javascript" src="js/timepicker.js"></script>
      <script type="text/javascript" src="js/script.js"></script>      
    @stack('after-scripts')
    <livewire:scripts />
</body>
</html>
