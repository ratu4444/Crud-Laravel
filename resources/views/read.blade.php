<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
</head>
<body>
    <a href="{{ route('create') }}">Create</a>
    <table>
        <tr>
            <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>action</th>
        </tr>
        @foreach($info as $inf) 
        <tr>
            <td>{{ $inf-> id }}</td>
          <td>{{ $inf-> name }}</td>
          <td>{{ $inf-> email }}</td>

          <td>
            <a href="{{ route('delete',$inf->id)}}">Delete</a>
            <a href="{{ route('update',$inf->id)}}">Update</a></td>
        </tr>
        @endforeach
      </table>
            



    

</body>
</html>