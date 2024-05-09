<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Landing Page</title>
  <link rel="stylesheet" href="landing_customer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
</head>
<body>
    <!-- <div class="container">
        <div class="left-nav">
            <div class="icon">
                <i class="fa-solid fa-tv"></i>
            </div>
          <h1 class="cable-heading">Cable</h1>
        </div> -->
        <ul>
            <li> <div class="icon">
                <img src="tv.jpg">
                </div>
            </li>
            <li style="float:left"><a>Cable</a></li>
            <li style="float:right"><a href="#" class="navigation">Contact Us</a></li>
            <li style="float:right"><a href="about.html" class="navigation">About Us</a></li>
            <li style="float:right"><a href="C_LOGIN.html" class="navigation">Login</a></li> 
         </ul>
    </div>


    <div class="middle-section">
        <h2 style="font-size: 65px;">Explore <br>First TV Package</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum <br> ipsum vitae nisi pretium, vitae tempor ex tincidunt.</p>

        <!-- <div class="price">Rs. 239/month</div> -->
        <button class="get-connect-btn">Get Connect Now</button>
       
    </div>

    <footer>
        <div class="footer">&copy;<span id="year"> </span><span> Cable TV Operator Service Management System. All rights reserved.</span></div>
      </footer>
      <script>let year = document.querySelector("#year");
    
        $(document).ready(function () {
          year.innerText = new Date().getFullYear();
        });</script>
</body>
</html>
