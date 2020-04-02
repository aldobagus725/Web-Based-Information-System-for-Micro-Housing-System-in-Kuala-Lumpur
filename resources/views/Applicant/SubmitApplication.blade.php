<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Submit</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/dbkl.css">
        <link rel="stylesheet" type="text/css" href="../css/animate.css"> 
    </head>
    <body>
       <nav class="navbar navbar-expand-sm navbar-dark fixed-top shadow-sm" role="navigation">
            <h2><a class="navbar-brand" href="http://localhost:8080/mhs_1/">
                DBKL MicroHousing
            </a></h2>
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>    
                <div class="collapse navbar-collapse navbar-main-collapse" id="NavNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#application">Application</a></li>
                        <li class="nav-item"><a class="nav-link" href="#residence">Residence</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contactus">Contact</a></li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            My Profile
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Help</a>
                            <a class="dropdown-item" href="../index.php">Logout</a>
                          </div>
                        </li>
                    </ul>
                </div>
        </nav>
        <div class="container-fluid contents">
            <div id="home" class="row clearfix" data-ibg-bg="../img/15.jpg">
                <div class="title-home">
                    Submit Application
                </div>
            </div>
            <div id="residence" class="row p-5">
                <div class="container">
                    <div class="row">
                        @foreach($residences as $r)
                        <div class="col-sm-6">
                            <form action="/pegawai/update" method="post" class="form-inline">
                                {{ csrf_field()}}
                                    <table class="table table-borderless table-dark table-hover">
                                        <tr>
                                            <th>Residence ID</th>
                                            <td><input type="disabled" name="residenceid" value="{{ $r->residenceid }}"></td>
                                        </tr>
                                        <tr>
                                            <th>Required Month</th>
                                            <td><input type="text" name="requiredMonth" required="required" placeholder="E.g. May, June..."></td>
                                        </tr>
                                        <tr>
                                            <th>Required Year</th>
                                            <td><input type="text" name="requiredYear" required="required" placeholder="E.g. 2020"></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="status" value="Processing">
                                    <input class="btn btn-primary btn-sm" type="submit" value="Submit Application">
                            </form>
                        </div>
                        @endforeach
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
        <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/magnific-popup.js" type="text/javascript"></script>
        <script src="../js/jquery.interactive_bg.js" type="text/javascript"></script>
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
    </body>
</html>