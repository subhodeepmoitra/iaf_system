<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    echo '<script>alert("Wrong Station ID or Password")</script>'; //to be removed if problem exists
    header("location: index.php"); // Redirecting To Home Page
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin_portal</title>
    <link rel="stylesheet" href="admin_portal/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_portal/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="admin_portal/assets/css/Header---Apple.css">
    <link rel="stylesheet" href="admin_portal/assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-plane-departure apple-logo"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Runway Profiling</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hanger Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Personnel Management</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Armour Management</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Aircraft Management</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                <path d="M8.51428 20H4.51428C3.40971 20 2.51428 19.1046 2.51428 18V6C2.51428 4.89543 3.40971 4 4.51428 4H8.51428V6H4.51428V18H8.51428V20Z" fill="currentColor"></path>
                                <path d="M13.8418 17.385L15.262 15.9768L11.3428 12.0242L20.4857 12.0242C21.038 12.0242 21.4857 11.5765 21.4857 11.0242C21.4857 10.4719 21.038 10.0242 20.4857 10.0242L11.3236 10.0242L15.304 6.0774L13.8958 4.6572L7.5049 10.9941L13.8418 17.385Z" fill="currentColor"></path>
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="content-1" class="py-5">
        <div class="container py-3">
            <div class="row text-center mb-5">
                <div class="col-xl-9 mx-auto">
                    <h6 class="m-0"><small class="text-uppercase text-black-50">airforce station briefing</small></h6>
                    <h2 class="mb-3"><?php echo $_SESSION['login_user'];?> Air Force Station<br></h2>
                    <p class="text-muted"><strong><?php echo $_SESSION['login_user'];?> Air Force Station</strong>&nbsp;is an&nbsp;<a href="https://en.wikipedia.org/wiki/Indian_Air_Force">Indian Air Force</a>&nbsp;base located at&nbsp;<?php echo $_SESSION['login_user'];?></a>,&nbsp;<a href="https://en.wikipedia.org/wiki/India">India</a>. <?php echo $_SESSION['login_user'];?> is one of the oldest stations in the IAF, operating transport units. One of the&nbsp;<a href="https://en.wikipedia.org/wiki/Mi-17">Mi-17</a>&nbsp;squadrons is based here.<br></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-3">
                    <div class="border-start p-4">
                        <h5>Location and type<br></h5>
                        <?php 
                               $user = $_SESSION['login_user'];
                               $sql = "SELECT location_type FROM `login` where username = '$user'";
                               $result = $conn->query($sql);
                               
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                       echo  $row["location_type"];
                                   }
                               } else {
                                   echo "0 results";
                               }
                             ?>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="border-start p-4">
                        <h5>Elevation AMSL&nbsp;&nbsp;<br></h5>
                            <?php 
                               $user = $_SESSION['login_user'];
                               $sql = "SELECT elevation FROM `login` where username = '$user'";
                               $result = $conn->query($sql);
                               
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                       echo  $row["elevation"];
                                   }
                               } else {
                                   echo "0 results";
                               }
                             ?>
                        <br></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="border-start p-4">
                        <h5><strong><span style="text-decoration: underline;">Coordinates</span></strong><br></h5>
                        <?php 
                               $user = $_SESSION['login_user'];
                               $sql = "SELECT coordinates FROM `login` where username = '$user'";
                               $result = $conn->query($sql);
                               
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                       echo  $row["coordinates"];
                                   }
                               } else {
                                   echo "0 results";
                               }
                             ?>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="border-start p-4">
                        <h5>Runway<br></h5>
                        <?php 
                               $user = $_SESSION['login_user'];
                               $sql = "SELECT runway FROM `login` where username = '$user'";
                               $result = $conn->query($sql);
                               
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                       echo  $row["runway"];
                                   }
                               } else {
                                   echo "0 results";
                               }
                             ?>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3">
                    <div class="border-start p-4">
                        <h5>Squadrons Stationed<br></h5>
                        <?php 
                               $user = $_SESSION['login_user'];
                               $sql = "SELECT squadrons FROM `login` where username = '$user'";
                               $result = $conn->query($sql);
                               
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                       echo  $row["squadrons"];
                                   }
                               } else {
                                   echo "0 results";
                               }
                             ?>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5"><button class="btn btn-primary" type="button">Edit Details(not working)</button></div>
        </div>
    </section>
    <script src="admin_portal/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>