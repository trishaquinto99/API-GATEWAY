<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>
        <div class="row justify-content-center">      
            <form action="validate" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"  placeholder="Enter Username" required>
                </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Enter Password" required>
                    </div>
                        <div class="form-group">
                            <button type="submit"  name="login" class="btn btn-primary btn-lg btn-block">Log in</button>
                        </div>
                    </form>
                </div>      
        

    </body>

</html>