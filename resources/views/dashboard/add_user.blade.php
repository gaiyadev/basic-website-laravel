<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.adminheader')
</head>
  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="#" method="POST">
        <h2 class="form-signin-heading">Create an account</h2>
        <div class="login-wrap">            
            <input type="text" class="form-control" name="name" placeholder="Full Name" autofocus>
            <input type="text" class="form-control" name="email" placeholder="Email">
                   
            <input type="text" class="form-control" placeholder="User Name" autofocus>
            <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
            <input type="checkbox" id="check" onclick="myFunction()">Show Password
            <input type="password" class="form-control" name="retypepass" placeholder="Re-type Password">
            <button class="btn btn-lg btn-login btn-block" name="addUser" type="submit">Signup</button>

    
            <a href="/admin" id="link" class="btn text-success">Home</a>

        </div>
      </form>
     

    </div>
    <style>
      #link {
        margin-left: 60%;
      }
        </style>
<script>
  function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <!-- Placed js at the end of the document so the pages load faster -->
@include('include.adminfooter')
    <!--Core js-->
    <script src="js/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>
</html>