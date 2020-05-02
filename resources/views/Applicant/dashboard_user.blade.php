<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dbkl.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    </head>
    <body>
       <nav class="navbar navbar-expand-sm navbar-dark fixed-top shadow-sm" role="navigation">
            <h2><a class="navbar-brand" href="/dashboard_user">
                DBKL MicroHousing
            </a></h2>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>    
                <div class="collapse navbar-collapse navbar-main-collapse" id="NavNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-link nav-item dropdown">
                            <a class="dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false" id="navbardrop" data-toggle="dropdown">
                                <span class="caret">
                                My Profile
                                </span>
                            </a>
                              <div class="dropdown-menu animate slideIn">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Account Details</a>
                                  <a class="dropdown-item" href="#">Change Password</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                              </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#application">Application</a></li>
                        <li class="nav-item"><a class="nav-link" href="#residence">Residence</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contactus">Contact</a></li>
                        
                    </ul>
                </div>
           
        </nav>
        <div class="container-fluid contents">
            <div id="home" class="row clearfix" data-ibg-bg="{{ asset('assets/img/8.jpg') }}">
                <div class="title-home">
                    Hello {{ Auth::user()->fullname }}!
                </div>
            </div>
            <div id="application" class="row p-5">
                <div class="container">
                    <div class="row">
                        <div class="title-aboutus">
                            Application
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">   
                            <table class="table table-borderless table-hover table-dark">
                                <tr>
                                    <th>Application ID</th>
                                    <th>Residence ID</th>
                                    <th>Application Date</th>
                                    <th>Required Month</th>
                                    <th>Required Year</th>
                                    <th>Status</th>
                                    <th>Payment</th>
                                    <th>Payment Status</th>
                                </tr>
                                @foreach($application as $app)
                                    @if($app->userID==Auth::user()->id)
                                <tr>
                                    <td>{{ $app->applicationID}}</td>
                                    <td>{{ $app->residenceID}}</td>
                                    <td>{{ $app->applicationDate}}</td>
                                    <td>{{ $app->requiredMonth}}</td>
                                    <td>{{ $app->requiredYear}}</td>
                                    <td>{{ $app->status}}</td>
                                    <td>{{ $app->payment}}</td>
                                    <td>{{ $app->payment_status}}</td>
                                </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="application" class="row p-5">
                <div class="container">
                    <div class="row">
                        <div class="title-aboutus">
                            Allocation
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">   
                            <table class="table table-borderless table-hover table-dark">
                                <tr>
                                    <th>Application ID</th>
                                    <th>Unit ID</th>
                                    <th>Date Staying</th>
                                    <th>Date Leaving</th>
                                    <th>Duration (In Days)</th>
                                </tr>
                                @foreach($application as $app)
                                    @foreach($allocate as $all)
                                        @if($a = $app->userID==Auth::user()->id)
                                            @if($all->applicationID==$a)
                                <tr>
                                    <td>{{ $all->applicationID}}</td>
                                    <td>{{ $all->unitNo}}</td>
                                    <td>{{ $all->fromDate}}</td>
                                    <td>{{ $all->endDate}}</td>
                                    <td>{{ $all ->duration}}</td>
                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="residence" class="row p-5">
                <div class="container">
                    <div class="row">
                        <div class="title-aboutus">
                            Residence
                        </div>
                    </div>
                    <div class="row">
                        <div id="carouselGallery" class="carousel slide" data-ride="carousel">
                            <br/>
                          <ol class="carousel-indicators">
                            <li data-target="#carouselGallery" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselGallery" data-slide-to="1"></li>
                            <li data-target="#carouselGallery" data-slide-to="2"></li>
                            <li data-target="#carouselGallery" data-slide-to="3"></li>
                            <li data-target="#carouselGallery" data-slide-to="4"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{ asset('assets/img/2.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{ asset('assets/img/4.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{ asset('assets/img/5.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{ asset('assets/img/7.jpg') }}" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{ asset('assets/img/11.jpg') }}" alt="Fifth slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <p class="text-center">
                            <a href="/ViewResidence">
                                <button class="btn btn-success btn-sdw">View More Residence</button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div id="contactus" class="row p-5 d-block">
                <div class="container">
                    <div class="row">
                        <div class="title-aboutus">
                            Contact Us!
                            <br/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <form action="mailto:aldobagus@hotmail.co.id?subject=DBKL Notification" method="post" enctype="text/plain">
                                <div class="form-group">
                                    <input type="text" name="e-mail address" class="form-control" placeholder="Your Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Your Details"></textarea>
                                </div>
                                <div class="form-row mb-5">
                                    <button class="btn btn-primary col-sm-6 col-md-auto ml-md-2 btn-sdw" type="submit" >
                                        Send Email
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                                <table class="office1">
                                    <tr>
                                        <th>Call Center: </th><td>+61 423 567 890</td>
                                    </tr>
                                    <tr>
                                        <th>Email: </th><td>dbkl_microhousing@gov.my</td>
                                    </tr>
                                </table>
                        </div>
                        <div class="col">
                                <table class="office2">
                                    <tr>
                                        <th>Office Address </th><td>Jln Merdeka No. 64, KL, Malaysia</td>
                                    </tr>
                                    <tr>
                                        <th>Office Service </th><td>Monday - Friday, 8 AM to 5 PM</td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/magnific-popup.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/jquery.interactive_bg.js') }}" type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                $("#home").interactive_bg();
                $("a").on('click', function (event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top - 85
                        }, 900, function () {
                            window.location.hash = hash - 85;
                        });
                    }
                });
            });
            </script>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Account Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <table>
                        <tr>
                            <th>Fullname</th><td>{{ Auth::user()->fullname }}</td>
                        </tr>
                        <tr>
                            <th>Username</th><td>{{ Auth::user()->username }}</td>
                        </tr>
                        <tr>
                            <th>UserID</th><td>{{ Auth::user()->id }}</td>
                        </tr>
                        <tr>
                            <th>Email</th><td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th>Salary</th><td>RM {{ Auth::user()->monthlyIncome }}</td>
                        </tr>
                        
                    </table>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>