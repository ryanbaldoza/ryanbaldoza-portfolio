<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Work+Sans:900" rel="stylesheet"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ryan Baldoza</title>
     <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>
<body>
    <a class="anchor" id="home"></a> 
<header>
        <nav class=" navbar navbar-toggleable-sm navbar-inverse fixed-top" >
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#home" >Ryan Baldoza</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#first">About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#second">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#third">Contact</a>
                    </li>
                  @if (Auth::check())
                   <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                  
                  @endif
                </ul>
            </div>
        </nav>
</header>

<div class="banner text-center">

<img src="https://cdn.pbrd.co/images/1fgrKZkyR.png" alt="banner" border="0">
  <div class="container-fluid">
<div class="social-btns"><a href="https://github.com/ryanbaldoza" target="_blank" class="btn"><i class="fa fa-github"></i> Github</a>
  <a href="https://codepen.io/ryanbaldoza/" target="_blank" class="btn"><i class="fa fa-codepen"></i> Codepen</a>
  <a target="_blank" href="https://www.freecodecamp.com/ryanbaldoza" class="btn"><i class="fa fa-free-code-camp"></i> FreeCodeCamp</a>
  </div>  
  </div>
</div>
   

     @yield('content')
  

 <footer class="footer blue-bg">
      <div class="container">
        <div class="text-center"><a href="https://github.com/ryanbaldoza" target="_blank" class="btn btn-lg"><i class="fa fa-github"></i></a>
         <a href="https://codepen.io/ryanbaldoza/" target="_blank" class="btn"><i class="fa fa-codepen"></i></a>          
          <a target="_blank" href="https://www.freecodecamp.com/ryanbaldoza" class="btn btn-lg"><i class="fa fa-free-code-camp"></i></a><br />
               <span>© 2017. All Rights Reserved </span>     
          </div>  

        </div>
</footer>
  <button style="display:none" type="button" id="loginBtn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">USN</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>

 
                    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Scripts -->
    <script src="{{ asset('vendors/js/jquery-2.1.1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>

    <script>
   
        if(document.URL.indexOf("#login") >= 0){ 
      document.getElementById('loginBtn').click();
      }
$('.navbar-toggler-right').on('click', function(){
    $("nav").addClass("blue-bg");
  }); 

    </script>

    <script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
</body>
</html>
