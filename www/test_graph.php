<?php
$connection = mysqli_connect("localhost","rajdb","rd1912","wordpress");
$Temp = mysqli_query($connection, "SELECT Tempreture FROM SensorDB");
$Time = mysqli_query($connection,"SELECT Reg_Date FROM SensorDB");
$hum = mysqli_query($connection,"SELECT Humidity FROM SensorDB");
$pre = mysqli_query($connection,"SELECT Pressure FROM SensorDB");
?>

<html>
<head>
<title> Test Graph</title>
<script src="Chart.bundle.js"></script>
</head>

<body>
<div class="container">
   <canvas id="myChart"></canvas>
</div>

<script>
var ctx = document.getElementById("myChart");
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
backgroundColor:['rgba(255,0,0,0.5)'],
borderWidth: 1
},
{
label :'Humdity in % ',
data : [<?php while ($q = mysqli_fetch_array($hum)) {echo '"' .$q['Humidity'].'",';}?>],
borderColor :['rgba(0,255,0,1)'],
backgroundColor :['rgba(0,255,0,0.5)'],
borderWidth:1,
},
{
label : 'Pressure in Pa',
data :[<?php while ($r = mysqli_fetch_array($pre)) {echo '"' .$r['Pressure'].'",';}?>],
borderColor :['rgba(0,0,255,1)'],
backgroundColor :['rgba(0,0,255,0.5)'],
borderWidth:1,
}
]

},
options: {

                scales: {

                    yAxes: [{

                            ticks: {

                                beginAtZero: true

                            }

                        }]

                }

            }
} );

</script>
</body>
</html>
