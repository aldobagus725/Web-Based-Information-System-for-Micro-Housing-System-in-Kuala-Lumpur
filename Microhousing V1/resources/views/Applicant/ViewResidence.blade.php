<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Residences</title>
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
                <div class="collapse navbar-collapse navbar-main-collapse animate slideIn" id="NavNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-link nav-item dropdown">
                            <a class="dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false" id="navbardrop" data-toggle="dropdown">
                                <span class="caret">
                                My Profile
                                </span>
                            </a>
                              <div class="dropdown-menu animate slideIn">
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Account Details</a>
                                  <a class="dropdown-item" href="{{ route('password.request') }}">Change Password</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                              </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/dashboard_user">Back to Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contactus">Contact</a></li>
                        
                    </ul>
                </div>
        </nav>
        <div class="container-fluid contents">
            <div id="home" class="row clearfix" data-ibg-bg="{{ asset('assets/img/15.jpg') }}">
                <div class="title-home">
                    Residences
                </div>
            </div>
            <div id="residence" class="row p-5">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <table class="table table-borderless table-dark table-hover">
                            <tr>
                                <th>Residence ID</th>
                                <th>Address</th>
                                <th>Number of Units</th>
                                <th>Size Per Unit (Meter Square)</th>
                                <th>Monthly Rental (Malaysian Ringgit)</th>
                                <th></th>
                            </tr>
                            @foreach($residencess as $r)
                            <tr>
                                <td>{{ $r->residenceID}}</td>
                                <td>{{ $r->address}}</td>
                                <td>{{ $r->numunits}}</td>
                                <td>{{ $r->sizeperunits}}</td>
                                <td>{{ $r->monthlyrental}}</td>
                                <td>
                                <a class="btn btn-primary btn-sm" href="/SubmitApplication/{{ $r->residenceID}}">Submit Application</a>
                                </td>
                            </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                    <br>
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