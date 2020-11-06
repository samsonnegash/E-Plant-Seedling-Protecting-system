<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Samson Negash</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">
    <link rel="stylesheet" href="/css/texttype.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="/css/leaderboard.css">
    <!-- sweetalert for my submit button  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
</head>

<body id="page-top">

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <h1>My Logo Here</h1>
    </div>

    <div class="mt-8 text-2xl">
        Welcome SamsonTo Our App!
    </div>
</div>

<br> <hr>
<h3><b>My Plants:</b></h3> <hr>
<div class="col-sm-6 col-md-4 portfolio-item">
    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
        <div class="portfolio-hover">
        </div><img class="img-fluid" src="/img/portfolio/1-thumbnail.jpg"></a>
    <div class="portfolio-caption">
        <h4>Bahr Zaf</h4>
        <p class="text-muted">5689</p>
    </div>
</div>




<hr>
<section id="leaderboard">
        <div class="row">
            <div class="col-lg-12 text-center" id="about">
                <h2 class="text-uppercase">Leader Board And Award</h2>
            </div>
        </div>

        <section id="scrims-ladder--container" class="scrims-ladder">
            <div class="ladder-nav">
              <div class="ladder-nav--col ladder-title">
                <h1>Standings</h1>
              </div>
              <div class="ladder-nav--col">
                 <input type="text" class="search" onkeyup="myFunction()" class="ladder-search" placeholder="Search Team, Player..." />
              </div>
            </div>
            <div class="ladder-nav--results">
              <div class="ladder-nav--results-col">
                <label>Rank</label>
              </div>
              <div class="ladder-nav--results-col">
                <label>Full Name</label>
              </div>
              <div class="ladder-nav--results-col">
                <label>Country</label>
              </div>
              <div class="ladder-nav--results-col">
                <label>Number of plants</label>
              </div>
              <div class="ladder-nav--results-col">
                <label>Grown Seedlings</label>
              </div>
              <div class="ladder-nav--results-col">
                <label>PTS</label>
              </div>
            </div>
            <div class="ladder-nav--results-players">
              <div class="results-col">
                <span class="results-rank"><span class="positions">1</span></span>
              </div>
              <div class="results-col">
                <span class="results-team">Samson Negash</span>
              </div>
              <div class="results-col">
                <span class="results-p1">Ethiopia</span>
              </div>
              <div class="results-col">
                <span class="results-p2">27</span>
              </div>
              <div class="results-col">
                <span class="results-gp">26</span>
              </div>
              <div class="results-col">
                <span class="results-pts">270</span>
              </div>
            </div>
            <!-- JS Loop -->
            <div class="ladder-nav--results-players">
                <div class="results-col">
                    <span class="results-rank"><span class="positions">2</span></span>
                </div>
                <div class="results-col">
                    <span class="results-team">Siraj Yesuf</span>
                </div>
                <div class="results-col">
                    <span class="results-p1">Ethiopia</span>
                </div>
                <div class="results-col">
                    <span class="results-p2">20</span>
                </div>
                <div class="results-col">
                    <span class="results-gp">20</span>
                </div>
                <div class="results-col">
                    <span class="results-pts">200</span>
                </div>
            </div>
            <div id="users" class="ladder-nav--results-players">
                    <div class="results-col">
                        <span class="results-rank"><span class="positions">3</span></span>
                    </div>
                    <div class="results-col">
                        <span class="results-team">Kaleb teshale</span>
                    </div>
                    <div class="results-col">
                        <span class="results-p1">Ethiopia</span>
                    </div>
                    <div class="results-col">
                        <span class="results-p2">20</span>
                    </div>
                    <div class="results-col">
                        <span class="results-gp">19</span>
                    </div>
                    <div class="results-col">
                        <span class="results-pts">190</span>
                    </div>
                </div>
            <div class="ladder-nav--results-players">
                <div class="results-col">
                    <span class="results-rank"><span class="positions">4</span></span>
                </div>
                <div class="results-col">
                    <span class="results-team">Biniam Negash</span>
                </div>
                <div class="results-col">
                    <span class="results-p1">Ethiopia</span>
                </div>
                <div class="results-col">
                    <span class="results-p2">12</span>
                </div>
                <div class="results-col">
                    <span class="results-gp">12</span>
                </div>
                <div class="results-col">
                    <span class="results-pts">120</span>
                </div>
            </div>
            <div class="ladder-nav--results-players">
                <div class="results-col">
                    <span class="results-rank"><span class="positions">5</span></span>
                </div>
                <div class="results-col">
                    <span class="results-team">Yonas Negash</span>
                </div>
                <div class="results-col">
                    <span class="results-p1">Ethiopia</span>
                </div>
                <div class="results-col">
                    <span class="results-p2">7</span>
                </div>
                <div class="results-col">
                    <span class="results-gp">7</span>
                </div>
                <div class="results-col">
                    <span class="results-pts">70</span>
                </div>
            </div>
            <div class="ladder-nav--results-players">
                <div class="results-col">
                    <span class="results-rank"><span class="positions">6</span></span>
                </div>
                <div class="results-col">
                    <span class="results-team">Bruck Negash</span>
                </div>
                <div class="results-col">
                    <span class="results-p1">Ethiopia</span>
                </div>
                <div class="results-col">
                    <span class="results-p2">5</span>
                </div>
                <div class="results-col">
                    <span class="results-gp">5</span>
                </div>
                <div class="results-col">
                    <span class="results-pts">50</span>
                </div>
            </div>
    </section>
<hr>
<h3><b>Reports:</b></h3>
<hr> 1  Hello your plant needs water <br>
<img src="/img/dried1.jpg" alt="" srcset="">
<hr>
<hr> 2 <img src="/img/dried2.jpg" alt="" srcset=""> <hr>


    <hr><hr>

    <div class="container bg-light">
        <h2>Make Your Own Other Tree</h2>
        <div class="row"></div>
        <div class="row">
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="/img/portfolio/1-thumbnail.jpg"></a>
                <div class="portfolio-caption">
                    <h4>Bahr Zaf</h4>
                    <p class="text-muted">Adiss Ababa Entoto Street</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="/img/portfolio/2-thumbnail.jpg"></a>
                <div class="portfolio-caption">
                    <h4>CMC Arabsa አራብሳ</h4>
                    <p class="text-muted">500 Tree are Now Free</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="/img/portfolio/3-thumbnail.jpg"></a>
                <div class="portfolio-caption">
                    <h4>Addis Ketema</h4>
                    <p class="text-muted">Free 300 Tree</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="/img/portfolio/4-thumbnail.jpg"></a>
                <div class="portfolio-caption">
                    <h4>Aware, Kuas Meda</h4>
                    <p class="text-muted">Only 30 Tree For First Registers</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid img-fluid" src="/img/portfolio/5-thumbnail.jpg"></a>
                <div class="portfolio-caption">
                    <h4>EECMY Residential Area</h4>
                    <p class="text-muted">200 Trees</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                    </div><img class="img-fluid" src="/img/portfolio/6-thumbnail.jpg"></a>
                <div class="portfolio-caption">
                    <h4>Yeka Enderase</h4>
                    <p class="text-muted">20 Trees 50 Birr For One</p>
                </div>
            </div>
        </div>
    </div>


    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="text-white copyright">Copyright&nbsp;© Samson Negash 2020</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase"> Adiss Ababa Entoto Street</h2>
                                    <p class="item-intro text-muted">At The Steest of Ayat Infront of Condominium and buildings.</p><img class="img-fluid d-block mx-auto" src="/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    <button type="button" onclick="sweetAlert(); return false"  class="btn btn-warning">Make It My Own Tree</button>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">CMC Arabsa አራብሳ</h2>
                                    <p class="item-intro text-muted">At The Steest of Ayat Infront of Condominium and buildings.</p><img class="img-fluid d-block mx-auto" src="/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                        <button type="button" onclick="sweetAlert(); return false"  class="btn btn-warning">Make It My Own Tree</button>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Addis Ketema</h2>
                                    <p class="item-intro text-muted">At The Steest of Ayat Infront of Condominium and buildings.</p><img class="img-fluid d-block mx-auto" src="/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                        <button type="button" onclick="sweetAlert(); return false"  class="btn btn-warning">Make It My Own Tree</button>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Aware, Kuas Meda</h2>
                                    <p class="item-intro text-muted">At The Steest of Ayat Infront of Condominium and buildings.</p><img class="img-fluid d-block mx-auto" src="/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                        <button type="button" onclick="sweetAlert(); return false"  class="btn btn-warning">Make It My Own Tree</button>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">EECMY Residential Area</h2>
                                    <p class="item-intro text-muted">At The Steest of Ayat Infront of Condominium and buildings.</p><img class="img-fluid d-block mx-auto" src="/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                        <button type="button" onclick="sweetAlert(); return false"  class="btn btn-warning">Make It My Own Tree</button>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 class="text-uppercase">Yeka Enderase</h2>
                                    <p class="item-intro text-muted">At The Steest of Ayat Infront of Condominium and buildings.</p><img class="img-fluid d-block mx-auto" src="/img/portfolio/1-full.jpg">
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae
                                        cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-unstyled">
                                        <li>Date: January 2017</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                        <button type="button" onclick="sweetAlert(); return false"  class="btn btn-warning">Make It My Own Tree</button>
                                    </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i><span>&nbsp;Close Project</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="/js/script.min.js"></script>
</body>


<script>
swal({
  title: "Are you sure?",
  text: "Wait.., you will get your secrte number also we will send you the certeficate on your email soon!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("865627 Your Get Your own tree pls take care of your tree !", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});

</script>
</html>
