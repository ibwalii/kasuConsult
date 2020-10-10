<?php include_once("../../../database/connection.php") ?>
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
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prototype</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body><div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="profile text-center">
                    <h3>Admin Panel</h3>
                    <img class="img rounded-circle mx-auto center-block" style="height: 130px; width: 150px;" src="../assets/img/star-sky.jpg">
                    <h4>User1</h4>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="posts.php">
                                <i class="fa fa-user"></i>
                            Blog Posts
                        </a>
                    </li>
                </ul>
                <a class="btn btn-default btn-block" href="../index.php"> <i class="fa fa-sign-out"></i> Logout</a>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <!-- As a link -->
                <div class="main">
                    <a class="btn btn-primary text-white" href="posts.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    <hr> 
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card">
                                        <h5 class="card-header bg-primary text-white">Users</h5>
                                <div class="card-body">
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
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="card">
                                        <h5 class="card-header bg-primary text-white">Post to Blog</h5>
                                <div class="card-body">
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
                              <!-- end of card  -->
                        </div>
                        
                    </div>   
                </div>
                
            </div>
            <!-- end of content -->
            
            
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>