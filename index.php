
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>ul {
    
    display: flex;
    gap:10px;
}
ul li{
    font-size: 17px;
    font-weight: 300;
    text-decoration: none;
    text-transform: uppercase;
    color: white;
  

}
ul:hover li a {
    color: #30edf4;

}
ul:hover li a:not(:hover){
    color: red;
    opacity: 1;
    filter: blur(0.2px);
}
  </style>
    <title>FFG</title>
  </head>
  <body>  
  <?php require 'pariuals/wnav.php' ?>   
  
<section class="main" >
  <div class="container">
    <div class="row" >
      <div class=" pt-5 " >  
      <div class="text-center " style="margin-left: 25%;">
        <h1> Premium Quality <br>products at great prices!</h1> 
          <a class="btn" href="home.php" style="width:150px; margin-left: 25%">Buy Now</a> 
</div>
      </div>
    </div>
  </div>
</section>   
  <?php require 'Footer.php' ?>   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>