@extends('layout/apps')
@section('content')

<!--Mask-->
<div id="intro" class="view">

    <div class="mask rgba-black-strong">

        <div class="container-fluid d-flex align-items-center justify-content-center h-100">

            <div class="row d-flex justify-content-center text-center">

                <div class="col-md-10">
                    <!-- Heading -->
                    <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 ">G-Hub</h2>

                    <!-- Divider -->
                    <hr class="hr-light">

                    <!-- Description -->
                    <h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Deleniti
                        consequuntur.</h4>

                        <a href="/contact" class="btn  btn purple-gradient btn-rounded">Get in Touch</a>
                        <a href="/contact" class="btn mr-1 btn blue-gradient">Read more</a>
                </div>

            </div>

        </div>

    </div>

</div>
<div class="container-fluid">
    <div class="row"> 
        <div class="col-md-7">
            <!-- Section: Features v.2 -->
<section class="my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
        <!-- Section description -->
        <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
          adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam.</p>
      
        <!-- Grid row -->
        <div class="row">
      
          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">
      
            <!-- Grid row -->
            <div class="row">
      
              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-bullhorn blue-text fa-2x"></i>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Marketing</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a class="btn btn-primary btn-sm">Learn more</a>
              </div>
              <!-- Grid column -->
      
            </div>
            <!-- Grid row -->
      
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-5">
      
            <!-- Grid row -->
            <div class="row">
      
              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-cogs pink-text fa-2x"></i>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Customization</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a class="btn btn-pink btn-sm">Learn more</a>
              </div>
              <!-- Grid column -->
      
            </div>
            <!-- Grid row -->
      
          </div>
          <!-- Grid column -->
      
          <!-- Grid column -->
          <div class="col-md-4">
      
            <!-- Grid row -->
            <div class="row">
      
              <!-- Grid column -->
              <div class="col-lg-2 col-md-3 col-2">
                <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-lg-10 col-md-9 col-10">
                <h4 class="font-weight-bold">Support</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a class="btn btn-purple btn-sm">Learn more</a>
              </div>
              <!-- Grid column -->
      
            </div>
            <!-- Grid row -->
      
          </div>
          <!-- Grid column -->
      
        </div>
        <!-- Grid row -->
      
      </section>
      <!-- Section: Features v.2 -->
        </div>
        <div class="col-md-5">
            <!-- Default form register -->
        <form class="text-center border border-light p-5 " action="#!">
            <p class="h4 mb-4 ">Sign up</p>  
                <!-- Material input -->
                <!-- Material form register -->
        <div class="card ">

                <h5 class="purple-gradient card-header info-color white-text text-center py-4">
                    <strong>Login</strong>
                </h5>
            
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
            
                    <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="#!">
            
                <!-- Email -->
                <div class="md-form">
                    <input type="email" id="materialLoginFormEmail" class="form-control">
                    <label for="materialLoginFormEmail">E-mail</label>
                </div>
            
                <!-- Password -->
                <div class="md-form">
                    <input type="password" id="materialLoginFormPassword" class="form-control">
                    <label for="materialLoginFormPassword">Password</label>
                </div>
            
                <div class="d-flex justify-content-around">
                    <div>
                    <!-- Remember me -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                        <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                    </div>
                    </div>
                    <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                    </div>
                </div>
            
                <!-- Sign in button -->
                <button class="btn btn-primary btn-block my-4 waves-effect z-depth-0" type="submit">Login</button>
            
                <!-- Register -->
                <p>Not a member?<a href="">Register</a> </p>      
                           
                </form>
        <!-- Form -->
    
      </div>
    
    </div>  
    
        </div>
    
    </div>
   
    </div>
    
    </div>

</div>

  
    
<!--/.Mask--> 
<style>
html,
body,
header,
#intro {
    height: 100%;
}

#intro {
    background: url("img/banner.jpg")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.top-nav-collapse {
    background-color: #24355C;
  }
  @media (max-width: 768px) {
    .navbar:not(.top-nav-collapse) {
      background-color: #24355C;
    }
  }
  @media (min-width: 800px) and (max-width: 850px) {
    .navbar:not(.top-nav-collapse) {
      background-color: #24355C;
    }
  }
</style>   
@endsection
