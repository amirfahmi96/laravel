<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>
        
        <!-- Bootstrap core CSS -->
        <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"-->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <style>
            #pict
            {   
                border-radius:50%;
                text-align:center;
                height:300px;
                width:300px;
                position:relative;
            }
            #row1
            {
               border:solid 1px;
               background-color:gainsboro;
            }
            #profile
            {
                font-size:20px;
            }
            #intro{
                padding-top:50px;
                padding-bottom:50px;
                border:solid 1px;
            }
            #info{
                padding-top:50px;
                border:solid 1px;
            }
        </style>


    </head>
    <body>
    <div class="container">
        <div class="text-center" id="row1">
            <div class="col-md" >
                <img id="pict" src="https://i.pinimg.com/originals/73/16/f5/7316f550de9ca0045e3d8d98a5bb5e44.png"> 
                <div class="text-center">
                    <h1> Mark Sukaberger </h1>
                </div>
                <div class="text-center">
                    <h4> Skills: 
                    <button type="button" class="btn btn-info">HTML,CSS</button>
                    <button type="button" class="btn btn-info">Javascript</button>
                    <button type="button" class="btn btn-info">Laravel</button>
                    <button type="button" class="btn btn-info">Azure</button>
                    </h4>
                </div>
            </div>
            
        </div>

        <div class="col-md" id="intro">
            <h4> About Me: Bla bla bla</h4>
        </div>
    

    <div class="container">
        <div class="row" id="row2">    
            <div class="col-md" id="info">
                <table>
                <tr><p id="profile">Name : <br></p></tr>
                <tr><p id="profile">Username : <br></p></tr>   
                <tr><p id="profile">Email : <br></p></tr>
                </table>           
            </div>
            <div class="col-md" id="info">
                <table>
                <tr><p id="profile">Address : <br></p></tr>
                <tr><p id="profile">City : <br></p></tr>
                <tr><p id="profile">Profile Link : <br></p></tr>
                </table>           
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
