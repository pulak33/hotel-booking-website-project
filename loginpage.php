<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./font-awesome-4.7.0/csss/font-awesome.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/scss/_icons.scss">
    <link rel="stylesheet" href="./login.css">
    
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 class="title">Sign UP</h1>
            <div class="underline"></div>
            <form action="./insert.php" method="POST">
                <div class="input-group">
                    <div class="input-field NameField">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="name" name="name">
                    </div><!--end input field-->
                    <div class="input-field">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" placeholder="email" name="email">
                    </div><!--end input field-->
                    <div class="input-field">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <input type="password" placeholder="password" name="password">
                    </div><!--end input field-->
                    <p><span class="text">Password Suggestions</span><a href="#"> click here</a></p>
                </div><!--end input-group-->
                <div class="btn-field">
                    <button type="submit" class="signUpbtn">Sign Up</button>
                    <button type="submit" class="disable signInbtn">Sign In</button>
                    <!--<a href="./index.html" class="disable signInbtn">Sign in</a>-->
                </div><!--end btn field-->
            </form>
        </div><!--end form-box-->
    </div><!--container end-->
    <script src="./login.js"></script>
    <link rel="php" href="./insert.php">
</body>

</html>