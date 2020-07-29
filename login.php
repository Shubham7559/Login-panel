<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class ="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-md-offset-4" style="padding-top:100px">
                <form action="check.php" method="post">
                    <div class="card" style="padding:10px">
                        <div class="card-title">
                           <h2 style="text-align:center"> Login </h2>
                        </div>
                        <div class="card-text">
                        <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="user">
                                
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass_1">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                            <div class="form-group"><br>
                            <p>Want to become a user ? <a href="registration.php">Register</a> </p></div>
                            
                        </div>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>