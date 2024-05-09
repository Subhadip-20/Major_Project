<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<style>
    body{
        background-image:url('/image/b2.jpg')
    }
      header {
    background-color: #fff;
    padding: 5px;
    margin-left: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  .logo {
    width: 25px;
    height: auto;
  } 
  .nav_list {
    list-style: none;
    display: flex;
  }
  
  .nav_list li {
    margin-right: 40px;
  }
  
  .nav_list li:last-child {
    margin-right: 0;
  }
  
  .nav_list li a {
    text-decoration: none;
    color: #24252a;
    font-weight: bold;
    font-size: larger;
    transition: color 0.3s ease;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  
  .nav_list li a:hover {
    color: #0088a9;
  }
    form {
        max-width: 400px;
        margin: 0 auto;
        margin-top:80px;
    }
    input[type="text"], input[type="email"], textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color:#f5f5dc;
        color: black;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #f5f5dc;
    }
</style>
</head>
<body>
<header>
      <div>
        <img class="logo" src="/image/tv.jpg" alt="Cable"><span style="font-weight: bold;"> Cable</span>
      </div>
    <nav>
        <ul class="nav_list">
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
  </header>

<form action="{{route('Customer_registration')}}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" max-length:10 name="phone" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="4" required></textarea>

    <input type="submit" value="Submit">
</form>

</body>
</html>