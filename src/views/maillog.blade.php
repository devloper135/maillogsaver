<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mail Log</h1>
    <form method="POST" action="{{ route('maillog') }}">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" />
        <input type="text" name="email" placeholder="Enter your email" />
        <textarea rows="10" cols="30" name="message" placeholder="Message"></textarea>
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
