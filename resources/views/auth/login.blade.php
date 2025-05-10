<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="/assets/login/style.css">
        <title>Login Page</title>
    </head>

    <body>
        <div class="container" id="container">
            <div class="form-container sign-in">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Sign In</h1>
                    <span>use your email password</span>
                    <input id="email" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                    <a href="#">Forget Your Password?</a>
                    <button type="submit">Masuk</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-right">
                        <h1>Hello, Friend!</h1>
                        <p>Silahkan Login untuk Mengakses Dashboard</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/login/script.js"></script>
    </body>
</html>