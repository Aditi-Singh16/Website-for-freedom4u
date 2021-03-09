<html>
    <head>
        <link rel="stylesheet" href="./style.css">
        <title>job</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
        #aftersub{
          position:absolute;
          top:0px;
        }
        .container{
          position:absolute;
          background-color:white;
          border-radius:20px;
          top:150px;
          left:650px;
          height:870px;
          width:500px;
        }
      </style>
    </head>
    <body>

        <script src="https://kit.fontawesome.com/14f5cf4f5a.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <img src="homeicon.PNG" style="width: 50px;height: 50px;">
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./aboutus.html">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/aditi/hackathon-invincia/Donate.php">Donate us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="http://localhost/aditi/hackathon-invincia/job.php">Get A job!</a>
              </li>
            </ul>
        </nav>

        <div class="jobs p-5" style="color:white">
          <h3>These are the list of available jobs</h3>
          <h4>Click on the link below to know more</h4>
          <ul class="list-unstyled p-3" style="font-size:20px">
            <li><a href="#">Green Fiber Works</a></li>
            <li><a href="#">Global Resource Corp</a></li>
            <li><a href="#">Malati Diaries</a></li>
            <li><a href="#">Stainless Steel Welding Services</a></li>
            <li><a href="#">Laxmi metals and tubes</a></li>
            <li><a href="#">Sagar pipes</a></li>
            <li><a href="#">Patel Productions</a></li>
            <li><a href="#">Aditya steel company</a></li>
          </ul>
        </div>
      
      
      <div class="container">
        <h3 style="text-align:center">Apply Now!!</h3>
        <form action="./Job.php" method="post">
          <div class="form-row">
            <div class="col">
              <label for="fname">First name:</label>
              <input type ="text" name="fname" class="form-control" required><br>
            </div>
            <div class="col-md-6">
              <label for="lname">Last name:</label>
              <input type ="text" name="lname" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label for ="address">Address:</label>
            <textarea rows="5" name="address" cols="30" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label for="Post">Which post do you want to apply for?</label>
            <input type ="text" name="Post" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="salary">Expected salary</label>
            <input type ="text" name="salary" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="company">Which company do you want to apply for?</label>
            <input type ="text" name="company" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Hist">Employment History:</label>
            <input type ="text" name="Hist" class="form-control" required>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="SSC">SSC Percentage</label>
              <input type ="text" name="SSC" class="form-control" required>
            </div>
            <div class="col"> 
              <label for="HSC">HSC Percentage</label>
              <input type ="text" name="HSC" class="form-control" required>
            </div>
          </div>
          <label for="OtherQ">Other Qualification</label>
          <input type ="text" class="form-control" name="OtherQ"><br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
        <section class="footerhome">
          <div class="row">
            <div class="col-lg-4">
              <h5 class="text-uppercase">Contact Us</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-dark"><i class="fas fa-home"></i> Kalyan,Rambaug</a>
                </li>
                <li>
                  <a href="#!" class="text-dark"><i class="fas fa-phone-volume"></i>9833589076</a>
                </li>
                <li>
                  <a href="#!" class="text-dark"><i class="fas fa-envelope"></i>Freedom4u@gmail.com</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h5 class="text-uppercase">Links</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-dark">Home</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">About us</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Projects</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Campaign</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h5 class="text-uppercase">Links</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-dark">Meet the Team</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">blog</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Get a scholarship</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">find a job</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row social">
            <ul class="list-unstyled ">
              <li>
                <a href="#!" ><i class="fab fa-facebook fa-2x" ></i></a>
              </li>
              <li>
                <a href="#!" ><i class="fab fa-instagram-square fa-2x"></i></a>
              </li>
              <li>
                <a href="#!" ><i class="fab fa-twitter-square fa-2x"></i></a>
              </li>
              <li>
                <a href="#!" ><i class="fab fa-linkedin fa-2x"></i></a>
              </li>
            </ul>
          </div>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="Freedom4U.com">Freedom4U</a>
          </div>

        </section>
    </body>
</html>
<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstname = $_POST['fname'];
        $lname = $_POST['lname'];
        $Address= $_POST['address'];
        $Sal= $_POST['salary'];
        $Position=$_POST['Post'];
        $comp=$_POST['company'];
        $history=$_POST['Hist'];
        $hsc=$_POST['HSC'];
        $ssc=$_POST['SSC'];
        $otherQualification=$_POST['OtherQ'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "freedom4u";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 

        $sql = "INSERT INTO `jobapplication`(`Fname`, `Lname`, `Address`, `Salary`, `Position`, `Company`, `EmpHistory`, `HSCmarks`, `SSCmarks`, `OtherQualifications`) VALUES ('$firstname','$lname','$Address',$Sal,'$Position','$comp','$history',$hsc,$ssc,'$otherQualification')";
        $result = mysqli_query($conn, $sql);

        if($result){
          echo '<div id="aftersub" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div id="aftersub" class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

  }
?>
<script>

if(window.history.replaceState)
{
  window.history.replaceState( null, null, window.location.href );
}
</script>