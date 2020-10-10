<?php include_once("../../database/connection.php") ?>
<?php

if($_POST){

// Declaring variables

$title = $_POST['posttitle'];
$body = $_POST['postbody'];

// Image Upload
$target_dir = "media/post/";
$target_file = $target_dir . basename($_FILES["postimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["postimage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["postimage"]["tmp_name"], "../../".$target_file)) {
        $insertdb = 1;
    } else {
    }
}

    if($insertdb){
        $query ="INSERT INTO `post` ( `p_title`, `p_body`, `p_img`, `p_user`) 
        VALUES ( '{$title}', '{$body}', '{$target_file}', 'user1');";

        mysql_select_db($database_name, $consult);
        $query = mysql_query($query, $consult) or die(mysql_error());
    }

}// if post

if($_GET){
    $id =  $_GET['del'];
    mysql_select_db($database_name, $consult);
    $query = "DELETE FROM post WHERE p_id = {$id}";
    $result = mysql_query($query, $consult);

    header('Location: blog.php');

}

 $query = "SELECT * FROM post";
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
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Kasu Library Consults</title>
  </head>
  <body>
        <div id="pageheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" id="title">
                      <span id="brand"> KASU Library Consultancy </span>
                      <small id="motto">Technology Vision. Technology Power. Your Library</small>
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
                            <li class="nav-item active">
                              <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.html">Services</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="clients.html">Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="testimonial.html">Testimonial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="media.html">Media</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link" href="internship.html">Internship</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
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
                                <div class="col-md-6" style="min-width:500px;">
                                    <h3>Blog Posts</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Post Title</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Manage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count = 1; do{ ?>
                                                <tr>
                                                <th scope="row"><?php echo $count ?></th>
                                                <td><?php echo $row['p_title']; ?></td>
                                                <td><?php echo $row['p_date']; ?></td>
                                                <td><a href="blog.php?del=<?php echo $row['p_id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"> </i></a></td>
                                                </tr>
                                                <?php $count++; }while($row = mysql_fetch_assoc($result)); ?>
                                            </tbody>
                                            </table>
                                    </div>
                                </div> 
                                <div class="col-md-6" style="min-width:500px;">
                                    <h3>Post to Blog</h3>
                                    <form name="postform" method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="posttitle">Post Title</label>
                                        <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Post Title"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="postimage">Post Image</label>
                                        <input type="file" class="form-control" id="postimage" name="postimage">
                                    </div>
                                    <div class="form-group">
                                        <label for="postbody">Post Content</label>
                                        <textarea class="form-control" id="postbody" name="postbody" rows="5">
                                        </textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
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