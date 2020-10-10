<?php include_once('../database/connection.php'); ?>
<?php
   $query = "SELECT * FROM post limit 5";
   mysql_select_db($database_name, $consult);
   $result = mysql_query($query, $consult);
   $row = mysql_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Infosol Consults</title>
  </head>
  <body>
      <div id="pageheader">
          <div class="container">
              <div class="row">
                <div class="col-md-6" id="title">
                  <div class="brand">
                  <p> Infosol Consults 
                    <span>A division of Kaduna State University library</span>
                  </p>
                  </div>
                  <p id="motto">Organizational solution through IT</p>
                </div>
              </div>    
          </div>
      </div>
  <!-- Navigation-->
  
          <nav class="navbar navbar-expand-lg navbar-light bg-light effect1 border-bottom">
                  <div class="container">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="services.php">Services</a>
                        </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="clients.php">Clients</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="blog.php">Blog</a>
                      </li> 
                      <li class="nav-item">
                          <a class="nav-link" href="internship.php">Internship</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                      
                    </ul>
                  </div>
                  </div>
          </nav>
          <!-- End of Nav  -->
      
                

                    <div class="container">
                        <div class="content-wrapper effect8">

                          <!-- Start -->

                        <div class="row">

                          <div class="col-md-9">
                                <h4><small>POSTS</small></h4>
                                <hr>
                                <?php do{ ?>
                                
                                <h2><?php echo $row['p_title']; ?></h2>
                                <h6><i class="fa fa-clock-o"></i> Post by <?php echo $row['p_user']; ?> , <?php echo $row['p_date']; ?>.</h5>
                                <p><?php echo substr($row['p_body'], 0, 100); ?>.</p>
                                  <a href="post.php?post=<?php echo $row['p_id']; ?>"><button type="button" name="readmore" id="" class="btn btn-info">Read More</button></a> 
                                  <hr>
                                <?php }while($row = mysql_fetch_assoc($result)); ?>

                          </div>
                          <!-- Right Section -->
                          <div class="col-md-3">
                              <div class="--Twitter--">
                                      <a class="twitter-timeline" data-height="500" data-theme="dark" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        
                              </div>
                              <div class="servicesblog">
                                  <h5>Recent Blog Post</h5> 
                                  <ul class="list-group list-group-flush">
                                          
                                  <?php include('sidepost.php') ?>
                                  </ul>
                              </div>
                          </div>
                          <!-- End of Right Section -->

                        </div>
                          <!-- End -->

                          
                        </div>        
                    </div>    
                


                <!-- Footer -->
	<section id="footer">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-4 col-md-4 offset-1">
            <h5>Quick links</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Services</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Clients</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Blog</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-1">
            <!-- <h5>Quick links</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
            </ul> -->
          </div>
          <div class="col-xs-12 col-sm-4 col-md-6">
            <h5>Contact Us</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"> <i class="fa fa-building" aria-hidden="true"></i> Address: No 21 Tafawa Balewa way, Ungwan Rimi GRA Kaduna. </a> </li>
              <li><a href="javascript:void();"><i class="fa fa-envelope"></i>Email: kasulibrary@kasu.edu.ng</a></li>
              <li><a href="javascript:void();"><i class="fa fa-phone"></i>Phone: +234 (0)803 573 4353</a></li>
              <ul class="list-unstyled list-inline social text-center">
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>  
            </ul>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
             <p class="h6">KASU Library &copy All right Reversed.</p>
          </div>
          </hr>
        </div>	
      </div>
    </section>
    <!-- ./Footer -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>