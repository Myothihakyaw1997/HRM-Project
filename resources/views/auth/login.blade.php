<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body class="bg-white">
  <div class="login-main">
    <div class="text-dark login-caption">Authentication</div>
    <div class="shadow login-card d-flex rounded">
        <div class="shadow card-left w-50 d-flex flex-column justify-content-center align-items-center">
            <p class="text-white">Sign in to the Dashboard</p>
            <p class="text-white">Or</p>
            <p class="text-white">Register the Account</p>
        </div>
        <div class="bg-white w-75 shadow-sm">
            <form class="m-5 mt-5 login-form" action="#" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #052334;border: 1px solid #052334">Sign In</button>
            </form>
            <div class="btn btn-primary register-btn" style="background-color: #052334;border: 1px solid #052334">Register</div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>