 <!-- Header Start --->
 <header class="header">
    <div class="header-top">
      <div class="container">
        <div class="header-top-wrapper">
          <div class="header-top-left">
            <div class="header-top-contact">
              <ul>
              <li>
                             @php
                         $social = App\Models\SocialLink::orderBy('id','desc')->first();
                         @endphp
                                 <a href="mailto:balucabs9@gmail.com">
                                     <i class="far fa-envelopes"></i>
                                     <span class="__cf_email__">
                                     {{@$social->email}}
                                     </span>
                                 </a>
                             </li>

                             <li>
                                 <a href="tel:+91 8884400238">
                                     <i class="far fa-phone-volume"></i>
                                     {{@$social->phone}}
                                 </a>
                             </li>


              </ul>
            </div>
          </div>
          <div class="header-top-right">
            <div class="header-top-social">
              <span>Follow us: </span>
              <a href="{{@$social->facebook}}">
                             <img src="https://convertkit.com/images/social-icons/facebook.png" alt="Facebook"
                                 style="text-decoration: none; width: 28px" /></a>
                         <a href="{{@$social->twitter}}">
                             <img src="https://convertkit.com/images/social-icons/twitter.png" alt="Twitter"
                                 style="text-decoration: none; width: 28px" /></a>
                         <a href="{{@$social->instagram}}">
                             <img src="https://convertkit.com/images/social-icons/instagram.png" alt="Instagram"
                                 style="text-decoration: none; width: 28px" /></a>
                         <a href="{{@$social->youtube}}">
                             <img src="https://convertkit.com/images/social-icons/youtube_alt.png" alt="YouTube"
                                 style="text-decoration: none; width: 28px" /></a>
                         <a href="{{@$social->linkedin}}">
                             <img src="https://convertkit.com/images/social-icons/linkedin.png" alt="linkedin"
                                 style="text-decoration: none; width: 28px" />
                         </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-navigation">
      <nav class="navbar navbar-expand-lg mob-nav">
        <div class="container position-relative">
        <a class="navbar-brand" href="{{ route('home') }}">
                     <img src="{{ asset('frontend/assets/img/logo/logo1.png') }}" alt="logo" />
                 </a>
          <div class="mobile-menu-right">
            <div class="search-btn">
              <button type="button" class="nav-right-link">

                <div>
                  <div class="">



                    <li class="btn-cta"><a href="">

                        <span class="btn-cta">Book Taxi / </span>
                        <img src="{{ asset('frontend/assets/img/chat.jpg') }}"
                                                 style="font-size: 13px;"> Help</a></li>

                  </div>
                </div>

              </button>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
              aria-expanded="false" aria-label="Toggle navigation">


              <!--
			  <span class="navbar-toggler-mobile-icon">
			  <i class="far fa-bars"></i>
			  </span> -->

              <!-- Mobile View Menu Icon start -->
              <div class="hamburger">
                <input type="checkbox" class="hamburger-init">
                <div class="menu">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                </div>

              </div>
              <!-- Mobile View Menu Icon End -->

            </button>
          </div>
          <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
            <li class="nav-item">
                             <a class="nav-link active" href="{{ route('home') }}"> Home </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('airport') }}">Airport Taxi </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('outstation') }}"> OutStation Taxi</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('oneway') }}"> Oneway Drop Taxi </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('local') }}"> Local Taxi</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('local') }}">Blog</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('contact') }}"> Contact us </a>
                         </li>

            </ul>
            <div class="nav-right">
              <div class="nav-right-btn mt-2">
                <a href="tel: +91 8884400237" class="theme-btn"><span class="far fa-phone"></span>
                  +91 8884400238
                </a>
              </div>
            </div>
          </div>



        </div>
      </nav>
    </div>
  </header>


 <!-- Header End --->
