<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Donate us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style>
        #aftersub{
          position:absolute;
          top:0px;
        }
        .fund_container{
          overflow:hidden;
          background-color: rgb(189, 138, 246);
          width:300px;
          height:330px;
          border-radius:20px;
          box-shadow: 15px 10px 18px rgb(49, 5, 98)
        }
        .fund_container img{
          overflow:hidden;
          width:280px;
          height:200px;
          border-radius:20px;
          padding-top: 10px
        }
        .container{
          overflow:hidden;
          position:absolute;
          left:440px;
          background-color:white;
          height:400px;
          width:500px;
          border-radius:20px
        }
        .amt button{
          overflow:hidden;
          width:450px;
          height:90px;
          border-radius:30px;
          border:none;
          background-color: rgb(156, 108, 211)
        }
        button:hover{
          background-color: rgb(89, 32, 153);
        }
        #rd{
          background-color:rgba(0, 0, 0, 0.2);
          width:200px;
          height:100px;
          color:white;
          opacity:0;
          z-index:1
        }
        .knowmore{
          text-align:center;
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
            <a class="nav-link " href="http://localhost/aditi/hackathon-invincia/Job.php">Get A job!</a>
          </li>
       </ul>
      </nav>

      <div class="funds d-flex justify-content-around p-3">
        <div class="fund_container" style="text-align:center">
          <img src="./donate1.PNG">
          <p>Cancer Care funds are used for people who are unable to fight this deadly disease and lets them win against cancer.Donate here and lead a cancer free future!!.</p>
        </div>
        <div class="fund_container" style="text-align:center">
          <img src="./donate2.PNG">
          <p>Cancer Care funds are used for people who are unable to fight this deadly disease and lets them win against cancer.Donate here and lead a cancer free future!!.</p>
        </div>
        <div class="fund_container" style="text-align:center">
          <img src="./donate3.PNG">
          <p>Cancer Care funds are used for people who are unable to fight this deadly disease and lets them win against cancer.Donate here and lead a cancer free future!!.</p>
        </div>
      </div>

      <div class="knowmore">
        <h5>To know more about our projecs <a href="./projects.html">Click here</a></h5>
      </div>
      <div class="amt">
        <div class="row d-flex justify-content-around p-4">
          <button>
            <b>$100</b>
            <p>yayy! U brought us one step closer to cancer free world</p>
          </button>
          <button>
            <b>$50</b>
            <p>Thankyou!!,U helped us feed a family</p>
          </button>
        </div>
        <div class="row d-flex justify-content-around p-4">
          <button>
            <b>$25</b>
            <p>Thankyou for helping us to make the nation more literate</p>
          </button>
          <button>
            <b>$15</b>
            <p>Keep doing the good work!!</p>
          </button>
        </div>
        <div class="row d-flex justify-content-around p-4">
          <button>
            <b>$10</b>
            <p>Yess! we can see a brighter world!</p>
          </button>
          <button>
              <b>$5</b>
              <p>Youe small steps help us take bigger leaps</p>
          </button>
        </div>
      </div>

      <!--<div class="recent-donor" id="rd">
      </div>-->

      <div class="container">
        <h4 style="text-align:center;">Donates Us and Help Others!!</h4>
        <form action="./Donate.php" method="post">
            <div class="form-row ">
              <div class="form-group col-md-6">
                <label for="name">Name:</label>
                <input type ="text" name="name" class="form-control" >
              </div>
              <div class="form-group col-md-6">
                <label for="email-id">Email id:</label>
                <input type="text" name="email-id" class="form-control" placeholder="abc@mail.com" >
              </div>
            </div>
            <div class="form-group">
              <label for="Donation">Donation for</label>
              <select id="Donation" name="Donation" class="form-control" >
                <option value="select" default>Select</option>
                <option value="Covidfund">Covid fund</option>
                <option value="Cancerfund">Cancer fund</option>
                <option value="WomenFund">Women education fund</option>
              </select>
            </div>
            <div class="form-group ">
                <label for="Donationamount" name="Donation amount">Donation amount</label>
                <input type ="text" name="Donationamount" class="form-control" >
            </div>
            <div class="form-row">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check">
                <label class="form-check-label" for="check">
                  Make this donation every
                </label>
              </div>
              <div class="col">
                <select name="timeperiod" class="form-control" >
                  <option value="year">year</option>
                  <option value="month">month</option>
                  <option value="day">day</option>
                </select> 
              </div>
            </div>
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
      <script src="./app.js"></script>
    </body>

</html>
<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $Email = $_POST['email-id'];
        $Donation_for= $_POST['Donation'];
        $Donation_amount= $_POST['Donationamount'];
        $val=$_POST['timeperiod'];
        $checkbox="";
        if (isset($_POST['check'])) {
          $checkbox=true;
          
      } else {
        $checkbox=false;
      }
      //echo $val;
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

        $sql = "INSERT INTO `donation`(`Name`, `Email`, `DonationFor`, `DonationAmount`, `DonationTime`, `Period`, `Checked`) VALUES ('$name','$Email','$Donation_for','$Donation_amount',current_timestamp(),'$val',$checkbox)";
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
      $records="SELECT count(*) from `donation`";
        $rec_res= $conn->query($records);
        $recent_id;
        $recent_time;
        if($rec_res->num_rows> 0)
        {
          // output data of each row
          while($row = $rec_res->fetch_assoc())
          {
              $recent_id= $row["count(*)"];
          }
        } else
        {
          echo "0 results";
        }
        $q2="SELECT `DonationTime` from `donation` where donor_id=$recent_id";
        $q2_res=$conn->query($q2);
        if($q2_res->num_rows > 0)
        {
          // output data of each row
          while($row = $q2_res->fetch_assoc())
          {
              $recent_time= $row["DonationTime"];
          }
        } else
        {
          echo "0 results";
        }
        $str1=explode(" ",$recent_time);


        //for recent donation hrs
        $time=$str1[1];
        $hr=explode(":",$time);
        $recent_donate_hrs=$hr[0];
        $recent_donate_mins=$hr[1];
        $recent_donate_sec=$hr[2];
        
        date_default_timezone_set("Asia/Kolkata");
        $str2=date("H:i:s");
        //echo $str2."str2";
        $str3=explode(":",$str2);
        $current_hr=$str3[0];
        //echo $current_hr;
        $current_min=$str3[1];
        $current_sec=$str3[2];

        $diff_hr=$current_hr-$recent_donate_hrs;
        $diff_min=$current_min-$recent_donate_mins;
        $diff_sec=$current_sec-$recent_donate_sec;

        //for recent donation day
        $date=$str1[0];
        $recent_donate_date=explode("-",$date);
        $rec_donate_yr=$recent_donate_date[0];
        $rec_donate_month=$recent_donate_date[1];
        $rec_donate_date=$recent_donate_date[2];

        date_default_timezone_set("Asia/Kolkata");

        $curr_dstr=date("Y-m-d") ;
        //echo $curr_dstr;
        $current_date=explode("-",$curr_dstr);
        $curr_yr=$current_date[0];
        $curr_month=$current_date[1];
        $curr_date=$current_date[2];
        
        $diff_yr=$curr_yr-$rec_donate_yr;
        $diff_mon=$curr_month-$rec_donate_month;
        $diff_day=$curr_date-$rec_donate_date;

        //echo $diff_yr."<br>";
        //echo $diff_mon."<br>";
        //echo $diff_day."<br>";


        if($diff_yr==0)
        {
          if($diff_mon==0)
          {
            if($diff_day==0)
            {
              if($diff_hr==0)
              {
                if($diff_min==0)
                {
                  echo '<div id="rd" class="alert recent-donor alert-dismissible fade show" role="alert">
                <p>someone donated</p>';
                echo $diff_sec .'secs ago
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                </div>';
                }
                else
                {
                  echo '<div id="rd" class="alert recent-donor alert-dismissible fade show" role="alert">
                <p>someone donated</p>';
                echo $diff_min .'mins ago
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                </div>';
                }
              }
              else
              {
                echo '<div id="rd" class="alert recent-donor alert-dismissible fade show" role="alert">
                <p>someone donated</p>';
                echo $diff_hr . 'hrs ago
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
              }
            }
            else
            {
              echo "days not zero";
              echo '<div id="rd" class="alert recent-donor alert-dismissible fade show" role="alert">
              <p>someone donated</p>';
              echo $diff_day . 'days ago
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>';
            }
          }
          else
          {
            echo '<div id="rd" class="alert recent-donor alert-dismissible fade show" role="alert">
          <p>someone donated</p>';
          echo $diff_mon .'months ago
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

          }
        }
        else{
          echo '<div id="rd" class="alert recent-donor alert-dismissible fade show" role="alert">
          <p>someone donated</p>';
          echo $diff_yr .'years ago
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';

        }
    }
      
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  setTimeout(function() {
    $("#rd").animate({
    left: '60px',
    opacity: '1',
    },3000); }, 5000);

  if(window.history.replaceState)
  {
    window.history.replaceState( null, null, window.location.href );
  }
</script>
<script src="app.js"></script>