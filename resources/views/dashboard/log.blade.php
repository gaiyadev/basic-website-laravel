<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

@extends('layout/apps')

<br/><br/><br/><br/><br/><br/><br/><br/><br/>
@section('content')
<div class="container">
    <div class="card ">
            <div class="row">          
                    <div class="row">
                            <form class="col s12">
                                <h3 class="text-center text-primary">Login</h3>
                              <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                  <input id="name" type="email" class="validate">
                                  <label for="name">Name</label>
                                  <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                                </div>
                              </div>
        
                              <div class="row">
                                    <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                      <input id="email" type="email" class="validate">
                                      <label for="email">Email</label>
                                      <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                                    </div>
                                  </div>
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i>
                                      </button>
                            </form>
                          </div>
        
        
                   
               
            </div>
    </div>
</div>
@endsection