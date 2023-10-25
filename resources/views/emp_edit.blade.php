<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('employe.update', $record->id) }}" method="POST">

    @csrf
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your Name" value="{{$record->name}}"><br>
        <label>UserName</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" value="{{$record->username}}"><br>
        <label>Password</label>
        <input type="text" name="password" id="password" placeholder="Enter your Password" value="{{$record->password}}"><br>
        <label>Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" value="{{$record->phone}}"><br>
        <label>Email</label>
        <input type="text" name="email" id="email" placeholder="Enter your Email" value="{{$record->email}}"><br>
        <input type="submit">
        
    </form>
</body>
</html>