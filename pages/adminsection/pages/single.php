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
                    <h4>Username</h4>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="posts.php">
                            <i class="fa fa-user"></i>
                            Blog Post
                        </a>
                    </li>
                </ul>
                <a class="btn btn-default btn-block" href="../index.php"> <i class="fa fa-sign-out"></i> Logout</a>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <!-- As a link -->
                <div class="main">
                    <a class="btn btn-primary text-white" href="messages.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    <hr>    
                        <div class="card text-center">
                            <div class="card-header bg-primary text-white">
                                  Message
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">About</h5>
                            <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Someone</footer>
                            </blockquote>
                            </div>
                            <div class="card-footer text-muted">
                                  2 hrs ago
                            </div>
                        </div>
                      <!-- End of Card Up -->
                </div>
                
            </div>
            <!-- end of content -->
            <footer class="footer">
                    <div class="container">
                      <p class="text-center"> &copy; Francis </p>
                    </div>
            </footer>
            
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