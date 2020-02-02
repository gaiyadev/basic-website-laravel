<!--Navbar -->
<nav class="mb-1 navbar fixed-top navbar-right scrolling-navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="/">G-Hub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="margin-left: 550px;" class="collapse navbar-collapse " id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto  ">
        <li class="nav-item  {{ Request::is('/') ? 'active': '' }}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item  {{ Request::is('about') ? 'active': '' }} ">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item  {{ Request::is('services') ? 'active': '' }}">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item  {{ Request::is('contact') ? 'active': '' }}">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item {{ Request::is('blog') ? 'active': '' }}">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Dropdown
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-github"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Login</a>
            <a class="dropdown-item" href="#">Register</a>
            
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->


 
  