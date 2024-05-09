<html>
<head>
    <title>Input Form</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('form.submit') }}">
            @csrf
            <div class="row">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="row">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="row">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>