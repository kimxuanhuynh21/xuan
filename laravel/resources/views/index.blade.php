<!DOCTYPE html>

<html>

<head>
    <title>Form Login</title>
    <!--package-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="col-md-offset-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Log in</strong>
            </div>
            <div class="panel-body">
                <form id="loginform" name="loginform" novalidate="novalidate" role="form">
                    <div class="form-group">
                        <label for="username">Username <span class="text-danger">*</span></label>
                        <input class="form-control" id="username" name="username" type="text" maxlength="50" placeholder="Enter your username here">
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <input class="form-control" id="password" name="password" type="password" maxlength="50" placeholder="Enter your password here">
                    </div>
                    <div class="form-group">
                        <label for="remember"> <input type="checkbox" name="remember" value=""> Remember my credentials</label>
                    </div>
                    <div class="form-group col-md-offset-1 col-md-10">
                        <button class="btn btn-primary col-md-6 col-md-offset-3" type="submit">Log in</button>
                    </div>
                    <div class="form-group">
                        <p class="text-center"><a href="forgot">Forgot your password</a></p>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center">Don't have an account? <a href="">Sign up</a></p>
    </div>

</body>

</html>