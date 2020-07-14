@extends ('layouts.app') 

@section('content')
    <header class="vide" style="width: 100%; height: 739px;"
      data-vide-bg="video/video-bg" data-vide-options="loop: true, muted: false, position: 0% 0%">
      <div class="container vide_content">
        <div class="brand">
          <img src="images/logo.png" alt=""/>
  
          <h1 class="brand_name">
            <a href="./">
              CreativeZone
            </a>
          </h1>
          <p class="brand_slogan">
            web design studio
          </p>
        </div>
  
        <h2>Professional web performance </h2>
  
        <h3>Сreating something special for each customer</h3>
        <br>

          @if (!Auth::guest())
              <p><a href="{{ route('logout') }}"
                  class="btn btn-primary btn-lg"
                  role="button"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
              </a></p>
          @else 
              <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
          @endif
        {{-- THE FORM BELOW WAS HERE --}}
      </div>
      </header>

      <main>
        <section class="well">
          <div class="container center">
            <h2>
              Our creative team consists of the experts <br/>
              skilled in all areas of web design
            </h2>
            <hr/>
            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br/>
               dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
               commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
               nulla pariatur.
            </p>
    
            <div class="row">
              <div class="col-md-4">
                {{-- <div class="lazy-img" style="padding-bottom:70.27027027027027%;"> --}}
                  <img data-src="" src="images/page-1_img01.jpg" alt="Profile Pic"/>
                {{-- </div> --}}
                <h3 class="primary">Sam Kromstain</h3>
    
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                   etdolore magna aliqua. </p>
              </div>
              <div class="col-md-4">
                {{-- <div class="lazy-img" style="padding-bottom:70.27027027027027%;"> --}}
                  <img data-src="" src="images/page-1_img02.jpg" alt=""/>
                {{-- </div> --}}
                <h3 class="primary">Alan Smith</h3>
    
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                   etdolore magna aliqua. </p>
              </div>

              <div class="col-md-4">
                {{-- <div class="lazy-img" style="padding-bottom:70.27027027027027%;"> --}}
                  <img data-src="" src="images/page-1_img03.jpg" alt=""/>
                {{-- </div> --}}
                <h3 class="primary">John Deo </h3>
    
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                   etdolore magna aliqua. </p>
              </div>
            </div>
          </div>
        </section>

        <section class="parallax center" data-url="" data-mobile="true" data-speed="0.5">
          <div class="well3">
            <div class="container">
              <h2>
                Best Joomla templates, WordPress themes <br/>
                and free Joomla modules
              </h2>
              <hr/>
              <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                <br/>
                 dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                 ea
                 commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                 nulla pariatur.
              </p>
            </div>
          </div>
        </section>
    
        <section class="well well__ins1 center">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                {{-- <div class="glyphicon-plus"></div> --}}
                <hr/>
                <h3>WE ARE CREATIVE</h3>
    
                <p>Lorem ipsum dolor sit amet conse ctetur <br/> adipisicing elit, sed do eiusmod tempor incididunt ut
                   labore
                   et </p>
              </div>
              <div class="col-md-4">
                {{-- <div class="glyphicon-java"></div> --}}
                <hr/>
                <h3>WE ARE MODERN</h3>
    
                <p>Lorem ipsum dolor sit amet conse ctetur <br/> adipisicing elit, sed do eiusmod tempor incididunt ut
                   labore
                   et </p>
              </div>
              <div class="col-md-4">
                {{-- <div class="glyphicon-hotel70"></div> --}}
                <hr/>
                <h3>WE ARE EXPERTS</h3>
    
                <p>Lorem ipsum dolor sit amet conse ctetur <br/> adipisicing elit, sed do eiusmod tempor incididunt ut
                   labore
                   et </p>
              </div>
            </div>
          </div>
        </section>

        <section class="well2 bg-secondary">
          <div class="container center">
            <div class="row">
              <div class="grid_8 preffix_2">
                <h2>Subscribe</h2>
    
                <form id="subscribe-form" class="subscribe-form">
    
                  <label class="email">
                    <input type="email" value="" placeholder="Enter email for latest posts">
                    <span class="error">*Invalid email.</span>
                    <span class="success">Your subscription request has been sent!</span>
                  </label>
                  <a class="btn" data-type="submit" href="#">Subscribe</a>
                </form>
              </div>
            </div>
          </div>
        </section>

        <div class="copyright center">
          © <span id="copyright-year"></span> Your Logo. All Rights Reserved
          <!-- {%FOOTER_LINK} -->
        </div>
      </main>
@endsection

{{--  <form id="bookingForm" class="booking-form">
          <div class="tmInput">
            <input name="Name" placeHolder="Name" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
          </div>
          <div class="tmInput">
            <input name="Email" placeHolder="E - mail " type="text" data-constraints="@NotEmpty @Required @Email">
          </div>
          <div class="tmInput">
            <input name="Phone" placeHolder="Phone" type="text" data-constraints="@NotEmpty @Required @Phone">
          </div>
          <div class="booking-form_controls">
            <a href="#" class="btn" data-type="submit">Get Started Now!</a>
          </div>
      </form> --}}