<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>INFO 3401</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    #btnid
    {
        background-color:teal;
        margin-top:10px;
        margin-bottom:10px;
        margin-left:-5px;
    }
    #btnid:hover
    {
        background-color:red;
    }
    #border{
        border:solid 1px;
        margin:40px;
    }
    #matno{
        margin-top:10px;
        margin-left:-5px;
    }
    #userid{
        margin-top:10px;
        margin-left:-5px;
    }
</style>
<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    
</body>
</html>


<form action="/api/getuser" method="POST">
   @csrf 
        <div class="col-md-3" id="border">
            <label for="id" id="matno">
                <strong>Matric Number</strong>
            </label>
            
            <input name="id" type="text" class="form-control" id="id" >


            <label for="firstname" id="fname">
                <strong>First Name</strong>
            </label>
            
            <input name="firstname" type="text" class="form-control" id="firstname" >


            <label for="lastname" id="lname">
                <strong>Last Name</strong>
            </label>
            
            <input name="lastname" type="text" class="form-control" id="lastname" >



            <label for="city" id="ct">
                <strong>City</strong>
            </label>
            
            <input name="city" type="text" class="form-control" id="city" >



            <label for="country" id="ctry">
                <strong>Country</strong>
            </label>
            
            <input name="country" type="text" class="form-control" id="country" >


            <button type="submit" class="btn" id="btnid">Submit</button>
        </div>
</form>
