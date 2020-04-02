<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
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
            <div id="home" class="row clearfix" data-ibg-bg="../img/2.jpg">
                <div class="title-home">
                    Hello (Nama User)!
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
                        <div class="col-sm-3">
                            <div class="jumbotron">
                                <center>
                                <h4>Application</h4>
                                <br>
                                <table>
                                    <tr><th>residenceID</th><td>30021</td></tr>
                                    <tr><th>applicationID</th><td>6000245</td></tr>
                                    <tr><th>applicationDate</th><td>9/12/2012</td></tr>
                                    <tr><th>requiredMonth</th><td>May</td></tr>
                                    <tr><th>requiredYear</th><td>2025</td></tr>
                                    <tr><th>Status</th><td>Waiting...</td></tr>
                                </table>
                                <br>
                                <button class="btn btn-success btn-sdw">View Details</button>
                                </center>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="jumbotron">
                                <center>
                                <h4>Application</h4>
                                <br>
                                <table>
                                    <tr><th>residenceID</th><td>30022</td></tr>
                                    <tr><th>applicationID</th><td>6000246</td></tr>
                                    <tr><th>applicationDate</th><td>9/9/2013</td></tr>
                                    <tr><th>requiredMonth</th><td>April</td></tr>
                                    <tr><th>requiredYear</th><td>2021</td></tr>
                                    <tr><th>Status</th><td>Waiting...</td></tr>
                                </table>
                                <br>
                                <button class="btn btn-success btn-sdw">View Details</button>
                                </center>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="jumbotron">
                                <center>
                                <h4>Application</h4>
                                <br>
                                <table>
                                    <tr><th>residenceID</th><td>30023</td></tr>
                                    <tr><th>applicationID</th><td>6000247</td></tr>
                                    <tr><th>applicationDate</th><td>7/9/2020</td></tr>
                                    <tr><th>requiredMonth</th><td>June</td></tr>
                                    <tr><th>requiredYear</th><td>2020</td></tr>
                                    <tr><th>Status</th><td>Rejected</td></tr>
                                </table>
                                <br>
                                <button class="btn btn-success btn-sdw">View Details</button>
                                </center>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="jumbotron">
                                <h4>Payment Detail</h4>
                                <br>
                                <table>
                                    <tr><th>Bill</th><td>Undefined</td></tr>
                                    <tr><th>Status</th><td>Undefined</td></tr>
                                </table>
                            </div>  
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <button class="btn btn-success btn-sdw">View More Applications</button>
                                    </td>
                                </tr>
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
                              <img class="d-block w-100" src="../img/2.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="../img/4.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="../img/5.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="../img/7.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="../img/11.jpg" alt="Fifth slide">
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
                            <a href="ViewResidence.blade.php">
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