<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body style>
    <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="track1.php">COVID-19 Analyzer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="blog.html">Blog<span class="sr-only">(current)</span></a>
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
<th width="20%">State</th>
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
$total_confirm=0;
$total_active=0;
$total_recovered=0;
$total_death=0;
while($i<$statescount){
    $state_check=$coronalive['statewise'][$i]['state'];
    if ($state_check !="State Unassigned"){
    ?>

    <tr>
    <td width="20%"><?php echo $coronalive['statewise'][$i]['state'] ?></td>
    <td><?php $conf=$coronalive['statewise'][$i]['confirmed']; echo $conf ;$total_confirm=$total_confirm+(int)$conf?></td>
    <td><?php $act=$coronalive['statewise'][$i]['active'];echo $act;$total_active=$total_active + (int)$act  ?></td>
    <td><?php $rec= $coronalive['statewise'][$i]['recovered'];echo $rec;$total_recovered=$total_recovered+ (int)$rec ?></td>
    <td><?php $deat= $coronalive['statewise'][$i]['deaths'];echo $deat;$total_death=$total_death+ (int)$deat ?></td>
    
    </tr>
    
<!--echo $coronalive['statewise'][$i]['lastupdatedtime'] ."<br>";
echo $coronalive['statewise'][$i]['state']."<br>";
echo $coronalive['statewise'][$i]['confirmed']."<br>";
echo $coronalive['statewise'][$i]['active']."<br>";
echo $coronalive['statewise'][$i]['recovered']."<br>";
echo $coronalive['statewise'][$i]['deaths']."<br>";-->
<?php
}
$i++;
}
?>
</table>
</div>
</div>
<!-- for card -->
<div class="card_row">
  <div class="card_column">
    <div style="color:red" class="card">
    <h5>Confirmed</h5>
    <h4><?php echo $total_confirm ?><h4>
    </div>
  </div>
  <div class="card_column">
    <div style="color:blue" class="card">
    <h5>Active</h5>
    <h4><?php echo $total_active ?><h4>
    </div>
  </div>
  <div class="card_column">
    <div style="color:green" class="card">
    <h5>Recovered</h5>
    <h4><?php echo $total_recovered ?><h4>
    </div>
  </div>
  <div style="color:purple" class="card_column">
    <div class="card">
    <h5>Death</h5>
    <h4><?php echo $total_death ?><h4>
      </div>
  </div>
</div>

<!--  -->
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
     <h1>Coronavirus symptoms</h1>
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
<br>
<br>
<section id="lab_social_icon_footer">
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
        <div class="text-center center-block">
          <p style="float:left;font-size:50px;"><b>Stay Safe</b></p>
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
          <p style="float:right;font-size:50px;"><b>Stay Vigilant</b></p>
    </div>
</div>
</section>
</body>
</html>

