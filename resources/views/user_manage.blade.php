<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management</title>
  <link rel="stylesheet" href="{{asset('css/usermanage.css')}}">
  
</head>
<body>
  <ul>
    <li> 
      <div class="icon">
        <img src="tv.jpg">
      </div>
    </li>
    <li style="float:left"><a class="Cable">Cable</a></li>
    <li style="float:right"><a href="{{ route('homepage') }}" class="navigation">Homepage</a></li>
    <li style="float:right"><a href="#" class="navigation">Contact Us</a></li>
    <li style="float:right"><a href="#" class="navigation">About Us</a></li> 
  </ul>
  
  <div class="tabs">
    <button id="adminTab" class="button-6" onclick="showAdmins()">Admin</button>
    <button id="userTab" class="button-6" onclick="showUsers()">User</button>
  </div>

  <div id="adminContent" class="content">
    
  </div>
  
  <div id="userContent" class="content" style="display: none;">
    
</div>

  <script src="{{asset('jss/usermanage.js')}}"></script>
</body>
<footer class="footer">
  <div class="container">
    <p style="color: #fff;">Enjoy your plan and feel connected!</p>
  </div>
</footer>

</html>
