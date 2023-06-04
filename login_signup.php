<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <header>
        <h2 class="logo">Kidoo</h2>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="login_signin.php" target="--">Logo In</a></li>
                <li><a href="login_signup.php" target="--">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-circle"></ion-icon>

                        <input type="text" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Confirm Password</label>
                    </div>

                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>

                    </div>
                    <button>Register</button>
                    <div class="register">
                        <p>Don't have a account <a href="#">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

</body>

</html>