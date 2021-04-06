<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19 Anlyzer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="blog.html">Blog <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_header">
<div class="row w-100 h-100">
<br>
<br>
<br>
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class="leftside w-100 h-100 d-flex justify-content-center">
<img src="images/99.png" width="300" height="300">
</div>
</div>
<div class="col-lg-7 col-md-7 col-12 order-lg-1 order-1">
<br>
<br>
<br>
<div class="rightside w-100 h-100 d-flex justify-content-center">
<h1>Let's Stay Safe & Fight Together Against <br>Cor <span class="c_rotate">
<img src="images/viru.png">
</span> na Virus</h1>
</div>
</div>
</div>
</div>
<section class="corona_update container-fluid">
<div class="mb-3">
<h3 class="text-center text-uppercase">COVID-19 LIVE UPDATES INDIA STATEWISE</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-stripped text-center">
<tr style="background-color:#c04000;color:white;">
<th>Country</th>
<th>State</th>
<th>Confirmed</th>
<th>Active</th>
<th>Recovered</th>
<th>Deaths</th>
</tr>
<?php 
$data=file_get_contents('https://api.covid19india.org/data.json');
$coronalive=json_decode($data,true);
$statescount=count($coronalive['statewise']);
$i=1;
while($i<$statescount){
    ?>
    <tr>
    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
    <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
    </tr>
<!--echo $coronalive['statewise'][$i]['lastupdatedtime'] ."<br>";
echo $coronalive['statewise'][$i]['state']."<br>";
echo $coronalive['statewise'][$i]['confirmed']."<br>";
echo $coronalive['statewise'][$i]['active']."<br>";
echo $coronalive['statewise'][$i]['recovered']."<br>";
echo $coronalive['statewise'][$i]['deaths']."<br>";-->
<?php
$i++;
}
?>

</table>
</div>
</div>
</section>
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
     <h1>About COVID-19</h1>
</div>
<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5">
<img src="images/88.jpg" class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col-12">
<h2>What is COVID-19 ?</h2>
<p>COVID-19 is the infectious disease caused by the most
recently discovered coronavirus.<br>This new virus and disease
were unkown before the outbreak began in Wuhan, China,<br> in
December 2019</p>
<p>Coronaviruses are a large family of viruses which may cause 
illness in animals or<br> humans. In humans, several coronaviruses 
are known to cause respiratory infections <br> ranging from the 
common cold to more severe diseases such as Middle East<br> Respiratory 
Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS).The<br> most recently discovered coronavirus
 causes coronavirus disease COVID-19. </p>
</div>
</div>
</div>
<div class="container-fluid pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
     <h1>Coronaviruse symptoms</h1>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/cough.jpg" class="img-fluid" width="120" height="120">
<figcaption>cough</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/runny.jpg" class="img-fluid" width="120" height="120">
<figcaption>runny nose</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/fever.jpg" class="img-fluid" width="120" height="120">
<figcaption>fever</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/cold.jpg" class="img-fluid" width="120" height="120">
<figcaption>cold</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/tired.jpg" class="img-fluid" width="120" height="120">
<figcaption>tiredness</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
<figure class="text-center">
<img src="images/breath.jpg" class="img-fluid" width="120" height="120">
<figcaption>difficulty breathing</figcaption>
</figure>
</div>
</div>
</div>
</body>
</html>

