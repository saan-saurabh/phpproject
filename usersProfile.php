 <?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equive="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap Css-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"   
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
 
    <!--MDB Css
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
      <!--Jquery CDN-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

       <!--Font Awesome-->
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

     <!--Goggle Font-->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
     <!-- end Goggle Font-->
     <!--costom CSS-->
   <link rel="stylesheet" type="text/css" href="index.css">
   <!--costom JavaScript-->
   <link rel="stylesheet" type="text/css" href="index.js">
<title>usersProfile</title>
</head>

  <body >
   <!-- Navigation Bar Started-->
   <div style="background-color: black">
     h
   </div>
         <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
          <?php
           if (isset($_SESSION['email'])){
           ?>
           <a href="afterlogin.php" target="_blank">
             <img src="images/Versatile.png" class="logo">
           </a>
           <?php
            }
          else
          {
           ?>
          <a href="index.php" target="_blank">
             <img src="images/Versatile.png" class="logo">
           </a>
          <?php
          }
         ?>

           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse" id="mymenu">
             <ul class="navbar-nav ml-auto font-weight-bold"> 
             <li class="nav-item"><a href="setting.php" class="nav-link text-dark mr-5">SETTINGS</a></li>
             <li class="nav-item"><a href="logout_script.php" class="nav-link text-dark mr-5 ">LOGOUT</a></li>

       
           </ul>
           </div>
         </nav>
<div class="container-fluid" style="background-image: linear-gradient(to bottom right,#AAFFA9,#11FFBD);  margin-top:25px; padding:25px;">
  <div class="row" style="padding:35px;">
    <div class="col-sm-6 col-md-6 col-lg-6" style="background-color:white; padding:15px;">
     <h2 style="color:blue">User Detail
     </h2>
<?php
     $email=$_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num >= 1)
{
echo "<h3 style='color:red;'>".$row['name']."</h3>";
echo "<div class='col-sm-12'>"."<span style='color:green'>Email: </span>".$row['email']."</div>";
echo "<div class='col-sm-12'>"."<span style='color:green'>Id: </span>".$row['id']."</div>";
echo "<div class='col-sm-12'>"."<span style='color:green'>Contact:".$row['phone']."</div>";
echo "<div class='col-sm-12'>"."<span style='color:green'>City: </span>".$row['city']."</div>";
echo "<div class='col-sm-12'>"."<span style='color:green'>College: </span>".$row['collegeName']."</div>";
}
?>
    </div>
  </div>
</div>
<div class="container-fluid" style="background-color:#f8f8f8;  margin:25px 0px;" >
  <div class="row" style="padding:35px;">
    <div class="col-sm-6" style="background-image: linear-gradient(to bottom right,#AAFFA9,#11FFBD); padding:25px;">
    <h2>Courses purchased</h2>
<?php
     $email=$_SESSION['email'];
$query = "SELECT coursepurchase FROM user_course WHERE email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if($num>=1){
while($row = mysqli_fetch_array($result))
{
$cours=$row['coursepurchase'];
echo "<div class='row'><div class='col-sm-4'><h5 style='color:green'>".$row['coursepurchase']."</div><div class='col-sm-8 text-right'><a href='primiumCourse.php?id={$row['coursepurchase']}'><button class='btn-primary'>Go to course</button></a></div></h5></div>";
}
}
else
{
echo "<h4 style='color:red'>Not enrolled in any course yet!</h4>";
}
?>
    </div>
    <div class="col-sm-6">
    <h2>My Progress</h2>
      <p>jo bhi course complete hai usko complete jo progress mae hai use progress hai uske details</p>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Footer -->
        <section>
            <footer class="page-footer font-small mdb-color pt-4 bg-dark text-white" id="myfooter">
              <div class="container text-center text-md-left">
                <div class="row text-center text-md-left mt-3 pb-3">
                  <!-- 1st Grid column -->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Versatile</h6>
                    <p>Creating versatility through Education.</p>
                  </div>
                  <!-- 1st Grid column end -->
                  <hr class="w-100 clearfix d-md-none">
                  <!-- 2nd Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Service</h6>
                    <p>
                      <a href="#!">WebDevelopment</a>
                    </p>
                    <p>
                      <a href="#!">AppDevelopment</a>
                    </p>
                    <p>
                      <a href="#!">DigitalMarketing</a>
                    </p>
                    <p>
                      <a href="#!">SoftwareDevelopment</a>
                    </p>
                  </div>
                  <!-- end Grid column end -->
            
                  <hr class="w-100 clearfix d-md-none">
            
                  <!-- 3rd Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>
                      <a href="#!">Your Account</a>
                    </p>
                    <p>
                      <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                      <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                      <a href="#!">Help</a>
                    </p>
                  </div>
                <!-- 3rd Grid column -->
                 <hr class="w-100 clearfix d-md-none">

                <!--4th Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                      <i class="fas fa-home mr-3"></i> Jalandhar, J 144411, Insia</p>
                    <p>
                      <i class="fas fa-envelope mr-3"></i> ver@gmail.com</p>
                    <p>
                      <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                      <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                  </div>
                <!--4th Grid column End-->
               </div>
                 <hr>

               <!-- Grid row -->
                  <div class="row d-flex align-items-center">
               <!-- Grid column -->
                      <div class="col-md-7 col-lg-8">
               <!--Copyright-->
                        <p class="text-md-left">© 2018 Copyright:
                           <a href="https://mdbootstrap.com/education/bootstrap/">
                              <strong> Versatile.com</strong>
                         </a>
                      </p>
                  </div>
             <!-- Grid column -->

               <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0">
                <!-- Social buttons -->
                     <div class="text-center text-md-right">
                       <ul class="list-unstyled list-inline">
                          <li class="list-inline-item">
                             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                 <i class="fab fa-facebook-f"></i>
                             </a>
                         </li>
                           <li class="list-inline-item">
                             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                  <i class="fab fa-twitter"></i>
                             </a>
                         </li>
                             <li class="list-inline-item">
                               <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                   <i class="fab fa-google-plus-g"></i>
                               </a>
                          </li>
                             <li class="list-inline-item">
                              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                            <i class="fab fa-linkedin-in"></i>
                         </a>
                       </li>
                      </ul>
                    </div>
                 </div>
              <!-- Grid column -->
            </div>
    <!-- Grid row -->
        </div>
  <!-- Footer Links -->
</footer>
</section>
<!-- Footer End-->
</body>
</html>