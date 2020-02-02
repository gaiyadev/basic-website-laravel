@extends('layout/apps')
@section('content')
<div class="jumbotron card card-image" style="background-image: url(img/enfold.jpg);">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>CONTACT US</strong></h2>
      <p class="mx-5 mb-5">I will be please to work on your next project
      </p>
    </div>
  </div>
</div>
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
           @include('include.messages') 
          <div class="card padding"> 
            <h3 class="text-center  purple-gradient" style="color: #fff; padding: 5px;">CONTACT US</h3>             
            <form class="form-horizontal" role="form" action="/contact/submit" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label text-primary">Fullname</label>
                <div class="col-sm-10">
                  <input class="form-control" id="name" type="text" name="name">
                </div>
              </div>

              <div class="form-group">
                  <label for="subject" class="col-sm-2 control-label text-primary">Subject</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="subject" type="text" name="subject">
                  </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label text-primary">Email</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="email" type="email" name="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mess" class="col-sm-2 control-label text-primary">message</label>
                    <div class="col-sm-10">
                      <textarea name="message" class="form-control" id="mess"></textarea>
                    </div>
                  </div>
              

                  <button type="submit" name="submit" class="btn btn-lg purple-gradient" >Submit</button>
             
            </form><br/>
          </div>
        </div>
        <div class="col-md-3"></div>
    </div>    
  </div>  
@endsection