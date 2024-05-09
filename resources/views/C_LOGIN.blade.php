<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/C_LOGIN.css')}}">
</head>
<body>
    <ul>
        <li> 
            <div class="icon">
                <img src="{{ asset('image/tv.jpg') }}">
            </div>
        </li>
        <li style="float:left"><a class="Cable">Cable</a></li>
        <li style="float:right"><a href="#" class="navigation">Contact Us</a></li>
        <li style="float:right"><a href="#" class="navigation">About Us</a></li> 
    </ul>
    <div class="container">
        <div class="header">
            <h1>LOGIN</h1>
        </div>
        <div class="main">
            <form id="loginForm">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Userid" name="userid" id="useridInput">
                </span><br>
                <span id="otpField" style="display:none;">
                    <i class="fa fa-lock"></i>
                    <input type="text" placeholder="OTP" name="otp">
                </span><br>
                <button type="button" id="otpButton" disabled>Get OTP</button>
                <button type="submit" id="loginButton" style="display:none;">Login</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('useridInput').addEventListener('input', function() {
            var userId = this.value;
            var otpButton = document.getElementById('otpButton');
            otpButton.disabled = !(userId.length === 10 && /^\d+$/.test(userId));
        });

        document.getElementById('otpButton').addEventListener('click', function() {
            document.getElementById('otpField').style.display = 'inline-block';
            this.style.display = 'none';
            document.getElementById('loginButton').style.display = 'inline-block';
        });
    </script>
</body>
<footer>
    <div class="footer">&copy;<span id="year"> </span><span> Cable TV Operator Service Management System. All rights reserved.</span></div>
  </footer>
</html>
