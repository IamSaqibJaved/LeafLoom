
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LABQUIZ</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/loginsignup.css') }}">
    
</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="/landingpg" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" name = "Username" required>
                    <label for="Username">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" name = "Email" required>
                    <label for="Email">Email</label>
                </div>
                <div class="input-group">
                    <input type="text" name = "Password" required>
                    <label for="Password">Password</label>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="sign-link">
                    <p>Already have an account? <a href="#" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-in">
            <form action="/landingpg" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name = "Username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name = "Password"  required>
                    <label for="">Password</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset('js/loginsignup.js')}}"></script>
</body>

</html>