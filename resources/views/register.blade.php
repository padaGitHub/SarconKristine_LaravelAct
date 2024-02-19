<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="{{route('saveData')}}" method="POST">
          @csrf
          @method('post');
            <label for="name">Name:</label><br>
            <input type="text" name="name"><br>
            
            <label for="email">Email:</label><br>
            <input type="email" name="email"><br>
            <label for="username">Username:</label><br><input type="text"name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit" class="btn btn-primary register-button">Register</button>
        </form>
    </div>
</body>
</html>
