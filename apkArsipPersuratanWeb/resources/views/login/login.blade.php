<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="{{ asset('css/login_style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login landing page</title>
</head>
<body>
    <section class="side">
        <img src="{{ asset('images/logo_a.png') }}" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">TATA USAHA</p>
            <div class="separator"></div>
            <p class="welcome-message">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, doloremque.</p>

            <form class="login-form">
                <div class="form-control">
                    <input type="text" placeholder="Username">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password">
                    <i class="fas fa-lock"></i>
                </div>

                <button class="submit">Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>