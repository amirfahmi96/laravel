<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course taken</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-5-7">   
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Matric Number</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                    </tr>
                        @foreach($user as $key=>$data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->firstname}}</td>
                        <td>{{$data->lastname}}</td>
                        <td>{{$data->city}}</td>
                        <td>{{$data->country}}</td>        
                    </tr>
                        @endforeach
                </thead>
            </table>
        </div>
    </div>
    </div>
                        
</body>
</html>