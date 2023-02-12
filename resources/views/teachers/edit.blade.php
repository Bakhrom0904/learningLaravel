<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="form">
        <form action="{{ route('teachers.update',$teacher->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <h4>Teacher edit</h4>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value="..{{$teacher->name}}">
            </div>
            <div class="form-group">
                <label for="">Addres</label>
                <input type="text" class="form-control" name="addres" value="..{{$teacher->addres}}">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone" value="..{{$teacher->phone}}">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="..{{$teacher->email}}">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>
</html>
