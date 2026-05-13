<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>DreamHome Login</title>

    <link rel="stylesheet"
    href="/assets/css/login.css">

</head>

<body class="login-page">

<div class="login-overlay">

    <div class="login-box">

        <img src="/assets/images/logo/logo.png"
        class="login-logo">

        <h2>DreamHome</h2>

        <p class="login-subtitle">
            Property Management System
        </p>

        <!-- TEMP ERROR MESSAGE -->

        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/login" autocomplete="off">
            @csrf

            <!-- Chrome being weird insurance -->

            <input type="text"
                   name="fakeusernameremembered"
                   style="display:none">

            <input type="password"
                   name="fakepasswordremembered"
                   style="display:none">

            <div class="input-group">

                <input type="text"
                       name="username"
                       placeholder="Username"
                       autocomplete="off"
                       required>

            </div>

            <div class="input-group">

                <input type="password"
                       name="password"
                       placeholder="Password"
                       autocomplete="new-password"
                       required>

            </div>

            <button type="submit"
            class="login-button">

                Login

            </button>

        </form>

    </div>

</div>

</body>
</html>
