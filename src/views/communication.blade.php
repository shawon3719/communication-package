<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Communication</title>
</head>
<body>
    <h1>Communicate with us</h1>
    <form action="{{route('communication.send')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name..">
        <input type="email" name="email" placeholder="Enter your email..">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message"></textarea>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>