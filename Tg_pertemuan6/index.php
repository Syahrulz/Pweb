<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
        
</head>
<body>
    <nav class="navbar navbar-fixed-bottom navbar-inverse bg-inverse" style="background-color: #000000;"></nav>

    <div class="container jumbotron text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h1> Login Page </h1><hr><br>
                </div>

                <div class="col-sm-4 offset-sm-4">
                    <form class="form-horizontal" method="POST" action="validasi.php" name="form">              
                        <div class="form-group">
                            <label class="control-label" for="username">Username :</label>
                            <input type="text" class="form-control" id="usernm" placeholder="Masukkan username" name="username">
                            <span id="error_nama" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">Password :</label>
                            <input type="password" class="form-control" id="passwd" placeholder="password" name="password">
                            <span id="error_email" class="text-danger"></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="submit">
                    </form>
                </div>     
            </div>
    </div>  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>