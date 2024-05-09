<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Landing Page</title>
  <link rel="stylesheet" href="{{asset('css/landing_operator.css')}}">
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
                <img src="{{ asset('image/tv.jpg') }}">
                </div>
            </li>
            <li style="float:left"><a>Cable</a></li>
            <li style="float:right"><a href="#" class="navigation">Contact Us</a></li>
            <li style="float:right"><a href="#" class="navigation">About Us</a></li>
            <li style="float:right"><a href="{{route('Adm_Login')}}" class="navigation">Login</a></li> 
         </ul>
    </div>


    <div class="middle-section">
        <h2 style="font-size: 65px;">Get Ready for <br>First TV Package</h2>
        <p>Transform your TV experience with our premium cable services, delivering diverse content and unparalleled convenience straight to your home.</p>
    <button onclick.windows.location.href="{{route('Adm_Login')}}" class="get-connect-btn" id="loginButton">Get Connect</button>
    <!-- <button class="get-connect-btn" id="loginButton">Bye</button> -->
        <!-- <div class="price">Rs. 239/month</div>
        <button  class="get-connect-btn" id="loginButton">Get Connect Now</button>
        -->
    </div>
    <div class="popup-container" id="loginPopupContainer">
    <div class="popup">
        <span class="close-popup" id="closePopup">&times;</span>
        <h2>Choose Login Type</h2>
        <div class="login">
            <a class="customer-button" href="{{route('C_LOGIN')}}" id="customerLoginButton" style="--i:7;"></a>
            <span id="cb">Login as a Customer</span>
        </div>
        <div class="login">
            <a class="provider-button" href="{{route('Adm_Login')}}" id="providerLoginButton" style="--i:8;"></a>
            <span id="pb">Login as a Admin</span>
        </div>
    </div>
</div>


    <!-- <footer>
        <div class="footer">&copy;<span id="year"> </span><span> Cable TV Operator Service Management System. All rights reserved.</span></div>
      </footer> -->
      <script>
    //   let year = document.querySelector("#year");
    
    //     $(document).ready(function () {
    //       year.innerText = new Date().getFullYear();
    //     });
        /* login button */
document.getElementById("loginButton").addEventListener("click", function() {
    document.getElementById("loginPopupContainer").style.display = "block";
});

document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("loginPopupContainer").style.display = "none";
});

document.getElementById("customerLoginButton").addEventListener("click", function() { /* Add functionality for customer login button */ });

document.getElementById("providerLoginButton").addEventListener("click", function() { /* Add functionality for provider login button */ });

// document.getElementById('loginButton').addEventListener('click', function() {
//         window.location.href = "{{ route('Adm_Login') }}";
//     });
</script>
</body>
<!-- <footer>
  <div class="footer">&copy;<span id="year"> </span><span> Cable TV Operator Service Management System. All rights reserved.</span></div>
</footer> -->
</html>
