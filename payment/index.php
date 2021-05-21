<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
<title>Spark Donation Camp</title>
</head>
<body>
<?php
include 'includes/header.php'; 
?>
<div class="content" >




<div class="container">
<div class="row">
<div class="col align-self-center texts">
<br><br>


<p class="text-center" id="text" style="font-weight: bolder; font-size:40px">Come forward and support our nations fight against</p>
<p id="text2" style="font-size:120px">COVID-19</p>
<br><br>
</div></div>
<div class="row justify-content-between">
<div class="col-sm-4 offset-sm-5">
<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HBLdODBBI4eant/view" data-text="Donate to help fight covid 19" data-color="#d39e00" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div>
    
    
</div></div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


  
</body>
</html>