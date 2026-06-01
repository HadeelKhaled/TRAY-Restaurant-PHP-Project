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

                  <div class="yellow_bg">
                        <div class="container">
                              <h2 class="ml15">
                                    <span class="word">Our</span>
                                    <span class="word">Recipes</span>
                              </h2>
                        </div>
                  </div>

                  <!-- section -->
                  <section class="resip_section" id="our-recipes">
                        <div class="container">
                              <div class="row">
                                    <div class="col-md-12">
                                          <div class="ourheading">
                                                <h2>Our Frequent Recipes</h2>
                                          </div>
                                    </div>
                                    <div class="container">
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <div class="owl-carousel owl-theme">
                                                            <?php $resultFrRec = $conn->query("SELECT * FROM frequentrecipes") or die ($conn->error);
                                                                  ?>
                                                            <?php
                                                            while($rowFrRec=$resultFrRec->fetch_assoc()): //every row in the table actually it is an associatve array.
                                                                  ?>

                                                            <div class="item">
                                                                  <div class="product_blog_img">
                                                                        <?php echo '<img  src="'.$rowFrRec['pic'].'" >' ?>
                                                                  </div>
                                                                  <div class="product_blog_cont">
                                                                        <h3><?php echo $rowFrRec['name']?></h3>
                                                                        <h4><span
                                                                                    class="theme_color">$</span><?php echo $rowFrRec['cost']?>
                                                                        </h4>
                                                                  </div>
                                                            </div>
                                                            <?php endwhile; ?>


                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                  </section>
                  <section class="resip_section" id="our-recipes">
                        <div class="container">
                              <div class="row">
                                    <div class="col-md-12">
                                          <div class="ourheading">
                                                <h2>Fast Food</h2>
                                          </div>
                                    </div>
                                    <div class="container">
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <div class="owl-carousel owl-theme">
                                                            <?php $resultFaRec = $conn->query("SELECT * FROM fastfood") or die ($conn->error);
                                                                  ?>
                                                            <?php
                                                            while($rowFaRec=$resultFaRec->fetch_assoc()): //every row in the table actually it is an associatve array.
                                                                  ?>

                                                            <div class="item">
                                                                  <div class="product_blog_img">
                                                                        <?php echo '<img  src="'.$rowFaRec['pic'].'" >' ?>
                                                                  </div>
                                                                  <div class="product_blog_cont">
                                                                        <h3><?php echo $rowFaRec['name']?></h3>
                                                                        <h4><span
                                                                                    class="theme_color">$</span><?php echo $rowFaRec['cost']?>
                                                                        </h4>
                                                                  </div>
                                                            </div>
                                                            <?php endwhile; ?>

                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                  </section>
                  <section class="resip_section" id="our-recipes">
                        <div class="container">
                              <div class="row">
                                    <div class="col-md-12">
                                          <div class="ourheading">
                                                <h2>Arabic Food</h2>
                                          </div>
                                    </div>
                                    <div class="container">
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <div class="owl-carousel owl-theme">
                                                            <?php $resultaRec = $conn->query("SELECT * FROM arabicfood") or die ($conn->error);
                                                                  ?>
                                                            <?php
                                                            while($rowaRec=$resultaRec->fetch_assoc()): //every row in the table actually it is an associatve array.
                                                                  ?>

                                                            <div class="item">
                                                                  <div class="product_blog_img">
                                                                        <?php echo '<img  src="'.$rowaRec['pic'].'" >' ?>
                                                                  </div>
                                                                  <div class="product_blog_cont">
                                                                        <h3><?php echo $rowaRec['name']?></h3>
                                                                        <h4><span
                                                                                    class="theme_color">$</span><?php echo $rowaRec['cost']?>
                                                                        </h4>
                                                                  </div>
                                                            </div>
                                                            <?php endwhile; ?>

                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                  </section>


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

      <script>
      $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                  margin: 10,
                  nav: true,
                  loop: true,
                  responsive: {
                        0: {
                              items: 1
                        },
                        600: {
                              items: 2
                        },
                        1000: {
                              items: 5
                        }
                  }
            })
      })
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
      <script src="js/myanim.js"></script>

</body>

</html>