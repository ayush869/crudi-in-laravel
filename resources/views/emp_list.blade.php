<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is first page</title>
</head>
<body>

    <a href="{{ route('employe.create')}}">Create</a>
    <table border="1">
<tr>
    <th>ID</th>
    <td>NAME</td>
    <td>USERNAME</td>
    <td>PASSWORD</td>
    <td>PHONE</td>
    <td>Email</td>
    <td>ACTION</td>
    
</tr>
@foreach ($i as $data )
    

<tr>
    <td>{{$data->id}}</td>
     <td>{{$data->name}}</td>
     <td>{{$data->username}}</td>
     <td>{{$data->password}}</td>
     <td>{{$data->phone}}</td>
    < <td>{{$data->email}}</td>
    <td> <a href="edit/{{$data->id}}">Edit</a>
        <a href="delete/{{$data->id}}">Delete</a></td>
</tr>
@endforeach




    </table>
    
</body>
</html>