<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cable TV Service Management System</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('.vscode/B36.avif') center center/cover no-repeat fixed; 
    }
    .navbar {
      background-color: rgba(0, 0, 0, 0.7); 
    }
    .navbar-brand {
      position: relative; 
      animation: moveLeft 10s linear infinite; 
      font-size: 24px; 
    }
    .navbar-brand span {
      color: yellow; 
    }
    .navbar-toggler {
      z-index: 999; 
    }
    @keyframes moveLeft {
      0% {
        left: 100%; 
      }
      100% {
        left: -100%;
      }
    }
    .container {
      padding: 20px;
      color: #fff; 
    }
    .card {
      margin-bottom: 20px;
      background-color: rgba(255, 255, 255, 0.7);
      color: #000; 
      margin-top: 10%;
    }
    .footer {
      text-align: center;
      margin-top: 50px;
      color: #f00; 
      font-size: 18px; 
      animation: fadeIn 2s ease-in-out; 
    }
    .footer p {
      display: inline-block; 
      padding: 10px 20px; 
      border-radius: 20px; 
      background-color: #290e25; 
      color: #000;
      border: hidden;
    }
    .plan-name,
    .plan-id {
      color: red; 
    }
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><span>Cable TV Operator</span> Service Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="c_home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title" style="color: blue;"><b>Your Plan Details</b></h3>
          <p class="card-text">Plan ID: <span id="planId" class="plan-id">123456</span></p>
          <p class="card-text">Plan Name: <span id="planName" class="plan-name">Basic Plan</span></p>
          <p class="card-text">Purchase Date: <span id="purchaseDate"  class="plan-name">2024-04-22</span></p>
          <p class="card-text">Validity Till: <span id="validity"  class="plan-name">2025-04-22</span></p>
          <p class="card-text">Your Channels: <span id="channels"  class="plan-name">Channel 1, Channel 2, Channel 3</span></p>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  
  document.getElementById('planId').innerText = "123456";
  document.getElementById('planName').innerText = "Basic Plan";
  document.getElementById('purchaseDate').innerText = "2024-04-22";
  document.getElementById('validity').innerText = "2025-04-22";
  document.getElementById('channels').innerText = "Channel 1, Channel 2, Channel 3";
</script>

</body>
<footer class="footer">
  <div class="container">
    <p style="color: #fff;">Enjoy your plan and feel connected!</p>
  </div>
</footer>

</html>