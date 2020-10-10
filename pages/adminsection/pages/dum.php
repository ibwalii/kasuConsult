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
                    <li class="active">
                        <a href="messages.html">
                                <i class="fa fa-inbox"></i>
                            Inbox <span class="badge badge-light">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="fa fa-user"></i>
                            User Management
                        </a>
                    </li>
                </ul>
                <a class="btn btn-default btn-block" href="../index.html"> <i class="fa fa-sign-out"></i> Logout</a>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
                <!-- As a link -->
                <!-- <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav> -->
                <div class="main">
                        <div class="card" style="height: 70vh;">
                                <h5 class="card-header bg-primary text-white">Inbox</h5>
                                <div class="card-body">

                                  <div class="table-responsive">
                                        <table class="table table-hover">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">From</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">date</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr class="tablerow bg-light">
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>About</td>
                                                    <td>23rd Jul 18</td>
                                                    <td><a class="btn btn-link" href="single.html">View</a> </td>
                                                  </tr>
                                                  <tr class="tablerow bg-light">
                                                        <th scope="row">2</th>
                                                        <td>Mark</td>
                                                        <td>About</td>
                                                        <td>23rd Jul 18</td>
                                                        <td><a class="btn btn-link" href="single.html">View</a> </td>
                                                  </tr>
                                                  <tr class="tablerow">
                                                        <th scope="row">3</th>
                                                        <td>Mark</td>
                                                        <td>About</td>
                                                        <td>23rd Jul 18</td>
                                                        <td><a class="btn btn-link" href="single.html">View</a> </td>
                                                      </tr>
                                                      <tr class="tablerow">
                                                            <th scope="row">4</th>
                                                            <td>Mark</td>
                                                            <td>About</td>
                                                            <td>23rd Jul 18</td>
                                                            <td><a class="btn btn-link" href="single.html">View</a> </td>
                                                          </tr>
                                                </tbody>
                                              </table>
                                  </div>
                                  <!-- End of table responsivr body -->
                                  <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                          <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                          </li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                              <span aria-hidden="true">&raquo;</span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </li>
                                        </ul>
                                    </nav>
                                    <!-- end of pagination -->
                                </div>
                                <!-- end of card body -->
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