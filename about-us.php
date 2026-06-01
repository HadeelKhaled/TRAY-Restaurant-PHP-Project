<!DOCTYPE html>
<html lang="en">

<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>TRAY Restaurant</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- owl css -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/myanim.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="css/footer.css">
</head>
<!-- body -->

<body class="main-layout">
      <?php
		$conn =new mysqli('localhost', 'eman','123', 'adminsitetwo') or die(mysqli_error($mysqli)); //(1) : make a connection

	?>
      <div id="player">
            <audio autoplay hidden>
                  <source src="TRAY Restaurant BackgroundMusic.mp3" type="audio/mpeg">
            </audio>
      </div>
      <!-- loader  -->
      <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>

      <div class="wrapper">
            <!-- end loader -->

            <div class="sidebar">
                  <!-- Sidebar  -->
                  <nav id="sidebar">

                        <div id="dismiss">
                              <i class="fa fa-arrow-left"></i>
                        </div>

                        <ul class="list-unstyled components">

                              <li class="active">
                                    <a href="index.php">Home</a>
                              </li>
                              <li>
                                    <a href="about-us.php">About</a>
                              </li>
                              <li>
                                    <a href="recipe.php">Recipe</a>
                              </li>
                              <li>
                                    <a href="contact-us.php">Contact Us</a>
                              </li>
                        </ul>

                  </nav>
            </div>

            <div id="content">
                  <!-- header -->
                  <header>
                        <div class="container-fluid">
                              <?php  
                              $resultHeader = $conn->query("SELECT * FROM header") or die ($conn->error);
                              $rowHeader=$resultHeader->fetch_assoc();?>
                              <div class="row">
                                    <div class="col-md-3">
                                          <div class="full">
                                                <a class="logo" href="index.php">
                                                      <?php echo '<img src="'.$rowHeader['logo'].'" width="60px" height="63px">' ?></a>
                                                <div class="logo-name">
                                                      <span>TRAY Restaurant</span>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-md-9">
                                          <div class="full">
                                                <div class="right_header_info">
                                                      <ul>
                                                            <li class="dinone">Contact Us : <img
                                                                        style="margin-right: 15px;margin-left: 15px;"
                                                                        src="images/phone_icon.png" alt="#"><a
                                                                        href="#"><?php echo $rowHeader['num']?></a>
                                                            </li>
                                                            <li class="dinone"><img style="margin-right: 15px;"
                                                                        src="images/mail_icon.png" alt="#"><a
                                                                        href="#"><?php echo $rowHeader['email']?></a>
                                                            </li>
                                                            <li class="dinone"><img
                                                                        style="margin-right: 15px;height: 21px;position: relative;top: -2px;"
                                                                        src="images/location_icon.png" alt="#"><a
                                                                        href="#"><?php echo $rowHeader['location']?></a>
                                                            </li>
                                                            <li>
                                                                  <button type="button" id="sidebarCollapse">
                                                                        <img src="images/menu_icon.png" alt="#">
                                                                  </button>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </header>
                  <!-- end header -->

                  <div class="padding-bg">
                        <div class="container">
                        </div>
                  </div>

                  <!-- about -->
                  <div class="about" id="about-us">
                        <div class="container">
                              <div class="row">
                                    <?php  
                              $resultAbout = $conn->query("SELECT * FROM about") or die ($conn->error);
                              $rowAbout=$resultAbout->fetch_assoc();?>
                                    <div class="col-md-12">
                                          <div class="title">
                                                <i><img src="images/title.png" alt="#" /></i>
                                                <h2><?php echo $rowAbout['title']?></h2>
                                                <span>It is a long established fact that a reader will be distracted by
                                                      the readable
                                                      content of a
                                                      <br> page when looking at its layout. The point of using Lorem
                                                </span>
                                          </div>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                          <div class="about_box">
                                                <h3>Best Food</h3>
                                                <p><?php echo $rowAbout['description']?></p>
                                          </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
                                          <div class="about_img">
                                                <figure><?php echo '<img  src="'.$rowAbout['pic'].'" >' ?></figure>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- end about -->

                  <!-- blog -->
                  <div class="blog">
                  </div>
                  <!-- end blog -->

                  <div class="yellow_bg">
                        <div class="container">
                              <h1 class="ml6">
                                    <span class="text-wrapper">
                                          <span class="letters">Our Market</span>
                                    </span>
                              </h1>
                        </div>
                  </div>
                  <!-- start slider section -->
                  <div class="slider_section">
                        <div class="container">
                              <div class="row">
                                    <div class="col-md-12">
                                          <div class="full">
                                                <div id="main_slider" class="carousel vert slide" data-ride="carousel"
                                                      data-interval="5000">
                                                      <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                  <div class="row">
                                                                        <div class="col-md-5">
                                                                              <div class="slider_cont">
                                                                                    <?php $resultM1 = $conn->query("SELECT * FROM market1") or die ($conn->error);
                                                                                    $rowM1=$resultM1->fetch_assoc(); ?>
                                                                                    <h3><?php echo $rowM1['title']?>
                                                                                    </h3>
                                                                                    <a class="main_bt_border"
                                                                                          href="contact-us.php">Contact
                                                                                          Us</a>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-md-7">
                                                                              <div
                                                                                    class="slider_image full text_align_center">
                                                                                    <?php echo '<img class="img-responsive" src="'.$rowM1['pic'].'" >' ?>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                  <div class="row">
                                                                        <div class="col-md-5">
                                                                              <div class="slider_cont">
                                                                                    <?php $resultM2 = $conn->query("SELECT * FROM market2") or die ($conn->error);
                                                                                    $rowM2=$resultM2->fetch_assoc(); ?>
                                                                                    <h3><?php echo $rowM2['title']?>
                                                                                    </h3>
                                                                                    <a class="main_bt_border"
                                                                                          href="contact-us.php">Contact
                                                                                          Us</a>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-md-7 full text_align_center">
                                                                              <div class="slider_image">
                                                                                    <?php echo '<img class="img-responsive" src="'.$rowM2['pic'].'" >' ?>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                  <div class="row">
                                                                        <div class="col-md-5">
                                                                              <div class="slider_cont">
                                                                                    <?php $resultM3 = $conn->query("SELECT * FROM market3") or die ($conn->error);
                                                                                    $rowM3=$resultM3->fetch_assoc(); ?>
                                                                                    <h3><?php echo $rowM3['title']?>
                                                                                    </h3>
                                                                                    <a class="main_bt_border"
                                                                                          href="contact-us.php">Contact
                                                                                          US</a>
                                                                              </div>
                                                                        </div>
                                                                        <div class="col-md-7 full text_align_center">
                                                                              <div class="slider_image">
                                                                                    <?php echo '<img class="img-responsive" src="'.$rowM3['pic'].'" >' ?>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <a class="carousel-control-prev" href="#main_slider" role="button"
                                                            data-slide="prev">
                                                            <i class="fa fa-angle-up"></i>
                                                      </a>
                                                      <a class="carousel-control-next" href="#main_slider" role="button"
                                                            data-slide="next">
                                                            <i class="fa fa-angle-down"></i>
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- end slider section -->



                  <!-- footer -->
                  <fooetr>
                        <div class="footer" id="contact-us">
                              <div class="container-fluid">
                                    <div class="row">
                                          <div class=" col-md-12">
                                                <h2>Request A<strong class="white"> Call Back</strong></h2>
                                          </div>
                                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                                <form class="main_form">
                                                      <div class="row">

                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                  <input class="form-control" placeholder="Name"
                                                                        type="text" name="Name">
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                  <input class="form-control" placeholder="Email"
                                                                        type="text" name="Email">
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                  <input class="form-control" placeholder="Phone"
                                                                        type="text" name="Phone">
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                  <textarea class="textarea" placeholder="Message"
                                                                        type="text" name="Message"></textarea>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                  <button class="send">Send</button>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                <div class="img-box">
                                                      <figure><img src="images/Contact Us.jpg" alt="img" /></figure>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                        <footer class="footer">
                              <div class="F_container">
                                    <div class="F_row">
                                          <div class="f_col">
                                                <?php  
                              $resultContact = $conn->query("SELECT * FROM footercontact") or die ($conn->error);
                              $rowContact=$resultContact->fetch_assoc();?>
                                                <h3>Contact Us</h3>
                                                <p><?php echo $rowContact['orgName']?><br>
                                                      Call: <?php echo $rowContact['orgNum']?><br>
                                                      Email: <?php echo $rowContact['orgEmail']?>

                                                </p>
                                          </div>
                                          <div class="f_col"><?php
                                          $footerlocation = $conn->query("SELECT * FROM footerlocation") or die
                                          ($conn->error);
                                          $rowfooterlocation=$footerlocation->fetch_assoc();?>
                                                <h3>Our Location</h3>
                                                <p><?php echo $rowfooterlocation['locationDes']?></p>
                                          </div>
                                          <div class="f_col">
                                                <?php  
                              $resultfooterlinks = $conn->query("SELECT * FROM footerlinks") or die ($conn->error);
                              $rowfooterlinks=$resultfooterlinks->fetch_assoc();?>
                                                <h3>Follow Me</h3>
                                                <p class="parag">Let us be social</p>
                                                <div class="socialLinks">

                                                      <a href="<?php echo $rowfooterlinks['FaceLink']?>"><i
                                                                  class="fa fa-facebook"></i></a>

                                                      <a href="<?php echo $rowfooterlinks['twitterLink']?>"><i
                                                                  class="fa fa-twitter"></i></a>

                                                      <a href="<?php echo $rowfooterlinks['instaLink']?>"><i
                                                                  class="fa fa-instagram"></i></a>



                                                </div>

                                          </div>
                                    </div>
                              </div>

                        </footer>
                  </fooetr>
                  <!-- end footer -->

            </div>
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

      <script src="js/jquery-3.0.0.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                  theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                  $('#sidebar').removeClass('active');
                  $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                  $('#sidebar').addClass('active');
                  $('.overlay').addClass('active');
                  $('.collapse.in').toggleClass('in');
                  $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
      });
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
      <script src="js/myanim.js"></script>

</body>

</html>