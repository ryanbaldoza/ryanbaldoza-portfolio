@extends('layouts.app')

@section('content')
  <div class="container">
      <a class="anchor" id="first"></a> 
   <section id="about">
      <div class="text-center">
      <h2>About Me</h2>  
      </div> 
      <div class="content">
        <div class="row">
        <div class="col-md-6">
        <img src="https://cdn.pbrd.co/images/1fBQh717d.png" alt="" />
        </div>
        <div class="col-md-6">
        <p>I am Paul Ryan Baldoza,a fresh graduate of Bachelor of Science on Information Technology at AMA Computer College Malolos, Philippines. During my studies, I have had the opportunity to hone my skills with HTML, CSS, Java script, PHP, Laravel and MySQL. 
      </p>
       <p>  
      I'm hardworking and hands-on effective problem solver. <br>
      I'm a fast learner - can acquire the required skills in relatively short time.<br> 
      I'm proficient in prototyping, designing, developing web applications. <br>
      And mindful of process flows, strong organizational skills and time management abilities.

      </p></div>
        </div>  
        </div>  
      </section>
      <hr />
        <a class="anchor" id="second"></a> 
        <section id="portfolio">
      <div class="text-center">
      <h2>Portfolio</h2>  
      </div> 
      <div class="site-images">
      <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                <a class="white-bg-links" href="#aboutModal" data-toggle="modal" data-target="#baby">
                    <img class="card-img-top" src="/img/php.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">Baby Stilettos</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                <a class="white-bg-links" href="#aboutModal" data-toggle="modal" data-target="#blog">
                    <img class="card-img-top" src="/img/php.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">Multi-User SEO Blog</h5>
                    </div></a>
                </div>
            </div>
           <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                <a class="white-bg-links" href="#aboutModal" data-toggle="modal" data-target="#weather-app">
                    <img class="card-img-top" src="/img/js.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">Weather App</h5>
                    </div></a>
                </div>
            </div>
           <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <a class="white-bg-links" href="#aboutModal" data-toggle="modal" data-target="#twitch">
                    <img class="card-img-top" src="/img/js.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">TwitchTV App</h5>
                    </div></a>
                </div>
            </div>
           <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <a class="white-bg-links" href="#aboutModal" data-toggle="modal" data-target="#wiki">
                    <img class="card-img-top" src="/img/js.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">Wikipedia App</h5>
                    </div></a>
                </div>
            </div>  
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <a class="white-bg-links" href="#aboutModal" data-toggle="modal" data-target="#budget">
                    <img class="card-img-top" src="/img/js.jpg">
                    <div class="card-block">
                        <h5 class="text-bold">Budget App</h5>
                    </div></a>
                </div>
            </div>  
           </div>  
        </div>  
      </section>
        <hr />
        <a class="anchor" id="third"></a> 
      <section id="contact">
          <div class="text-center">
          <h2>Contact Me</h2>  
          </div> 
        <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
               {!! Form::open(['method' => 'POST', 'action' => 'HeaderController@sendMail']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                            @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                         </div>
                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                        <label for="subject">Subject</label>
                                        <input name="subject" type="text" class="form-control" id="subject">
                                         @if ($errors->has('subject'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                        <label for="message">Message</label>
                                        <textarea rows="10" name="message" id="message" class="form-control"></textarea>
                                        @if ($errors->has('message'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                          </div>
                    </div>
                    <div class="col-md-12">
                    <div class="g-recaptcha pull-right" style="margin-left: 10px;" 
                               data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                    </div>
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">

            <address>
                <strong>Email</strong><br>
                <a class="white-bg-links" href="mailto:#">ryanbaldoza@gmail.com</a>
            </address>
            <address>
                <strong>Mobile</strong><br>
                <a class="white-bg-links" href="tel:+639355822214">+63 935 5822214</a>
            </address>
            
         
        </div>
    </div>
      </section>  
</div>
{{-- MODALS --}}

<!-- Modal -->
    <div class="modal fade" id="baby" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header te">
                 <h4 class="modal-title" id="myModalLabel">Baby Stilettos</h4>
                    <button type="button" class="white-bg-links close" data-dismiss="modal" aria-hidden="true"></button>
                    
                 </div>
                <div class="modal-body">
                    <center>
                    <h3 class="media-heading">BabyStilettos.com</h3>
  
                        <span class="label label-warning">HTML5 CSS</span>
                        <span class="label label-info">jQuery</span>
                        <span class="label label-info">Ajax</span>
                        <span class="label label-success">PHP Laravel MySQL</span>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Description: </strong><br>
                        Babystilettos.com is an ecommerce site developed using Laravel PHP framework for backend. </p>
                    <br>

                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <a class="btn btn-primary" data-dismiss="modal">View Project</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

        <div class="modal fade" id="blog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header te">
                 <h4 class="modal-title" id="myModalLabel">Multi-User SEO Blog</h4>
                    <button type="button" class="white-bg-links close" data-dismiss="modal" aria-hidden="true"></button>
                    
                 </div>
                <div class="modal-body">
                    <center>
                    <h3 class="media-heading">Multi-User SEO Blog using Laravel</h3>
  
                        <span class="label label-warning">HTML5 CSS</span>
                        <span class="label label-info">jQuery</span>
                        <span class="label label-success">PHP Laravel MySQL</span>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Description: </strong><br>
                        This is a project from the <a class="white-bg-links" href="https://www.udemy.com/learn-laravel-php-framework-building-multi-user-seo-blog-app">Learn Laravel PHP Framework Building Multi User SEO Blog</a> tutorial on Udemy.com. Some of the key concepts taught on this course are: Building Multi User Authentication System, Restrictions and Permissions,Mass Email to Users, Assigning different roles to users etc. </p>
                        <p>
                          
                        </p>
                    <br>

                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <a class="btn btn-primary" data-dismiss="modal">View Project</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="weather-app" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header te">
                 <h4 class="modal-title" id="myModalLabel">Weather App</h4>
                    <button type="button" class="white-bg-links close" data-dismiss="modal" aria-hidden="true"></button>
                    
                 </div>
                <div class="modal-body">
                    <center>
                    <h3 class="media-heading">Weather App with 6-day Forecast</h3>
           
                        <span class="label label-warning">HTML CSS</span>
                        <span class="label label-info">JavaScript</span>
                        <span class="label label-info">jQuery</span>
                      
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Description: </strong><br>
                        Weather app is a project for free code camp using JavaScript and jQuery. The app uses HTML5 geolocation, Internet Protocol API and Google API to get the users location then uses Dark Sky API for the weather </p>
                    <br>

                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <a class="btn btn-primary" data-dismiss="modal">View Project</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

     <div class="modal fade" id="twitch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header te">
                 <h4 class="modal-title" id="myModalLabel">Twitch TV App</h4>
                    <button type="button" class="white-bg-links close" data-dismiss="modal" aria-hidden="true"></button>
                    
                 </div>
                <div class="modal-body">
                    <center>
                    <h3 class="media-heading">Twitch Channel Status Viewer App</h3>
           
                        <span class="label label-warning">HTML CSS</span>
                        <span class="label label-info">JavaScript</span>
                        <span class="label label-info">jQuery</span>
                      
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Description: </strong><br>
                        This app calls Twitch.tv's JSONP API to get the channels details. It shows which channels are online or offline. </p>
                    <br>

                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <a class="btn btn-primary" data-dismiss="modal">View Project</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

     <div class="modal fade" id="wiki" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header te">
                 <h4 class="modal-title" id="myModalLabel">Wikipedia Viewer App</h4>
                    <button type="button" class="white-bg-links close" data-dismiss="modal" aria-hidden="true"></button>
                    
                 </div>
                <div class="modal-body">
                    <center>
                    <h3 class="media-heading">Wikipedia Viewer App</h3>
           
                        <span class="label label-warning">HTML CSS</span>
                        <span class="label label-info">JavaScript</span>
                        <span class="label label-info">jQuery</span>
                      
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Description: </strong><br>
                        Using Wikipedia's API, users can search Wikipedia entries in a search box and see the resulting Wikipedia entries. </p>
                    <br>

                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <a class="btn btn-primary" data-dismiss="modal">View Project</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

     <div class="modal fade" id="budget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header te">
                 <h4 class="modal-title" id="myModalLabel">Budget App</h4>
                    <button type="button" class="white-bg-links close" data-dismiss="modal" aria-hidden="true"></button>
                    
                 </div>
                <div class="modal-body">
                    <center>
                    <h3 class="media-heading">Budget Calculator App</h3>
           
                        <span class="label label-warning">HTML CSS</span>
                        <span class="label label-info">JavaScript</span>
                      
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Description: </strong><br>
                        This is a budgeting app that calculates a basic budget based on a list of income and expenses. This is a project in <a class="white-bg-links" target="_blank" href="https://www.udemy.com/the-complete-javascript-course/">The Complete JavaScript Course</a> on Udemy taught by Jonas Schmedtmann.</p>
                    <br>

                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <a class="btn btn-primary" data-dismiss="modal">View Project</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
