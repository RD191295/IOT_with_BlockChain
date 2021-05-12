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
</head>
</script>
<body class="">
<script>
.tbody{
    display: block;
    overflow: auto;
}
</script>
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
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
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
          <li class="active ">
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
 
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Sensor Data</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">
                        Sr. No.
                      </th>
                      <th class="text-center">
                        Date/Time
                      </th>
                      <th class="text-center">
                        Tempreture
                      </th>
                      <th class="text-center">
                        Pressure
                      </th>
                      <th class="text-center">
                        Humidity
                      </th>
                      <th class="text-center">
                        Explorer Link
                      </th>
                    </thead
                      <?php
$link = mysqli_connect("localhost", "rajdb", "rd1912", "wordpress");
$sql = "SELECT * FROM SensorDB";
if($result = mysqli_query($link,$sql))
{
while($row = mysqli_fetch_array($result))
{
echo "<tbody>";
            echo '<tr>
                 <td align="center">'.$row['Id'].'</td>   
                 <td align="center">'.$row['Reg_date'].'</td>
                 <td align="center">'.$row['Tempreture'].'</td>
                 <td align="center">'.$row['Pressure'].'</td>
                 <td align="center">'.$row['Humidity'].'</td>
                 <td align="center"><a href="https://explorer.iota.org/devnet/transaction/'.$row['BlockChain_Link'].'" target="_blank">View</a></td>';
             echo '</tr>';
}
mysqli_free_result($result);
}
mysqli_close($link);
echo "</tbody>";
?>
                  </table>
                  </div>
              </div>
            </div>
          </div>
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
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>
</body>
</html>
