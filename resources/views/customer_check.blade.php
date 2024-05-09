<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Check</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 300px; /* Adjust this width as needed */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            height:auto;
        }
    </style>
</head>
<body>
<form action="{{route('customer_check')}}" method="post">
    @csrf
        <label for="email">Enter Your Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>