<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Create</title>
</head>
<body>
    <form action="{{ route('update', $info->id) }}" method="post">
      @csrf 
      @method('PUT')

      <div class="form-group">
        <label for="exampleInputEmail1">Your name</label>
        <input type="text" name="name" class="form-control" value="{{ $info->name }}" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">
        <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
      </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" value="{{ $info->email }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>