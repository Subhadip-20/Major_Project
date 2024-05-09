<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Login</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{url ('css/Adm_Login.css')}}">
</head>
<body>
    <ul>
        <li> <div class="icon">
            <img src="{{ asset('image/tv.jpg') }}">
            </div>
        </li>
        <li style="float:left"><a>Cable</a></li>
        <li style="float:right"><a href="#" class="navigation">Contact Us</a></li>
        <li style="float:right"><a href="#" class="navigation">About Us</a></li>
        <!-- <li style="float:right"><a href="#" class="navigation"></a></li>  -->
     </ul>
</div>
    <div class="container">
        <div class="header">
            <h1>LOGIN</h1>
        </div>
        <div class="main">
        <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Enter Your ID" name="adm_id">
                </span><br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </span><br>
                    <button>Login</button>
            </form>
        </div>
    </div>
</body>
<footer>
    <div class="footer">&copy;<span id="year"> </span><span> Cable TV Operator Service Management System. All rights reserved.</span></div>
  </footer>
</html>