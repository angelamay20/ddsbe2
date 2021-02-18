<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
<link rel="icon" href="https://i.dlpng.com/static/png/6459177_preview.png" type="image/gif" sizes="16x16">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <style type="text/css">
        
        body {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/91.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
        .container{
            width:300px;
            margin-top:70px;
            
        }
        
        h2{
            <color: #000000;
            text-align:center;
            font-weight: bold;
        }
       
    </style>
</head>
<body>
    <div class="container animated wow fadeInLeftBig">
        <h2>SECURITY LOGIN</h2>
        <hr>
        <form action= "validate"  method="post">
            <div class="form-group row">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
                    
            </div>    
            <div class="form-group row" >
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="in-group row">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
            
    </div> 
    <script >
  
        new WOW().init();
    </script>
</body>
</html>