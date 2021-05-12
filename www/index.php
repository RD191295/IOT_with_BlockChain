<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    IOT Dashbord by Raj Dalsaniya
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
<meta name='viewport' content='width=device-width, initial-scale=1'>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="Chart.bundle.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
          <h4>TechGear</h4>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Iot with Blockchain</p>
            </a>
          </li>
          <li>
            <a href="./owncloud/index.html">
              <i class="nc-icon nc-single-02"></i>
              <p>OwnCloud</p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Sensor_Data</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">IOT Dashabord</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-ruler-pencil text-information"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Tempreture</p>
                      <p class="card-title">
<?php
$link = mysqli_connect("localhost", "rajdb", "rd1912", "wordpress");
$sql = "SELECT * FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link, $sql);

 while($row = mysqli_fetch_array($result))   
  {
    $Tempreture = $row['Tempreture'];
  }
echo "$Tempreture °C"

?>
</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?php
$Link = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$sql = "SELECT *FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result))
{
  $Date = $row['Reg_date'];
}
echo "$Date";
?>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-sound-wave text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Pressure</p>
                      <p class="card-title">
<?php
$link = mysqli_connect("localhost", "rajdb", "rd1912", "wordpress");
$sql = "SELECT * FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link, $sql);

 while($row = mysqli_fetch_array($result))   
  {
    $Pressure = $row['Pressure'];
  }
echo "$Pressure Pa";

?>
<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                                    <?php
$Link = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$sql = "SELECT *FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result))
{
  $Date = $row['Reg_date'];
}
echo "$Date";
?>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Humidity</p>
                      <p class="card-title">
<?php
$link = mysqli_connect("localhost", "rajdb", "rd1912", "wordpress");
$sql = "SELECT * FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link, $sql);

 while($row = mysqli_fetch_array($result))   
  {
    $Humidity = $row['Humidity'];
  }
echo "$Humidity %";
?>
                        </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  <?php
$Link = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$sql = "SELECT *FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result))
{
  $Date = $row['Reg_date'];
}
echo "$Date";
?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Explorer Link</p>
                      <p class="card-title">
                  <?php
$Link = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$sql = "SELECT *FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result))
{
  $Hash = $row['BlockChain_Link'];
}
echo "<a href= 'https://explorer.iota.org/devnet/transaction/$Hash' target='_blank'>Link</a>";
?>

</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                                    <?php
$Link = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$sql = "SELECT *FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result))
{
  $Date = $row['Reg_date'];
}
echo "$Date";
?>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Sensor Value Plot</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="150"></canvas>
</div>
<?php
$connection = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$Temp = mysqli_query($connection, "SELECT Tempreture FROM SensorDB");
$Time = mysqli_query($connection,"SELECT Reg_Date FROM SensorDB");
$hum = mysqli_query($connection,"SELECT Humidity FROM SensorDB");
$pre = mysqli_query($connection,"SELECT Pressure FROM SensorDB");
?>
<script>
var ctx = document.getElementById("chartHours");
var myChart = new Chart(ctx,
{
type: 'line',

data: {
labels: [<?php while ($b = mysqli_fetch_array($Time)) { echo '"'  . $b['Reg_Date'] .'",' ;}?>],

datasets: [
{
label: 'Tempreture in celcius',
data: [<?php while ($p = mysqli_fetch_array($Temp)) { echo '"' . $p['Tempreture'] . '",';}?>],
borderColor:['rgba(255, 0, 0, 1)'],
backgroundColor:['rgba(255,0,0,0.2)'],
borderWidth: 1,
fill:false
},
{
label :'Humdity in % ',
data : [<?php while ($q = mysqli_fetch_array($hum)) {echo '"' .$q['Humidity'].'",';}?>],
borderColor :['rgba(0,255,0,1)'],
backgroundColor:['rgba(0,255,0,0.2)'],
borderWidth:1,
fill:false
},
{
label : 'Pressure in Pa',
data :[<?php while ($r = mysqli_fetch_array($pre)) {echo '"' .$r['Pressure'].'",';}?>],
borderColor :['rgba(0,0,255,1)'],
backgroundColor :['rgba(0,0,255,0.2)'],
borderWidth:1,
fill:false
}
]

},

options:
{
responsive:true,
legend:
{
posittion :'bottom',
},
hover :{
mode:'label'
},
scales:{
   yAxes:[{
      display : true,
}],
      xAxes:[{
          display : true,
}]

}
}

});

</script>

              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i>
                  <i class="fa fa-refresh"></i>
                                    <?php
$Link = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$sql = "SELECT *FROM SensorDB ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($result))
{
  $Date = $row['Reg_date'];
}
echo "$Date";
?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
            </div>
          </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            </nav>
            <div class="Fdits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Raj Dalsaniya
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>
</html>
