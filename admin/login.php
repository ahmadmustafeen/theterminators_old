<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - The Terminators</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
</head>

<body>


    <div class="login-bar">
        <div class="login-bar-left">
            <h2>
                Login page
            </h2>
        </div>
       
    </div>
    <!-- <?php 
    if(isset($_GET['login'])){
    $wrong = $_GET['login'];
    }
    ?> -->

    <!-- login-form -->
    <section>
        <div class="login-form">
            <div class="login-heading">
                <!-- <img src="./assests/images/w.png" alt=""> -->
                <h1>
                    The Terminators
                </h1>
            </div>
            <div class="login-input">
             <div class="login-input-field">
                    <div class="login-input-field-icon">
                        <i class="far fa-user-circle"></i>
                    </div>
                    <form action="../adminz/process.php" method="POST">
                        
                    <input type="text" name="UName" id="UName" placeholder="Username...">
                </div>
                <div class="login-input-field">
                    <div class="login-input-field-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <input type="password" name="Password" id="Password" placeholder="Password...">
                </div>
            </div>
            <div class="login-button">
                <button type="submit" name='Login'>Get started</button>
                
                </form>
                <div class="login-button-inner">
                    <a href="#">Need an Account?</a>
                    <a href="#">Forgot Password</a>
                </div>
            </div>
        </div>
    </section>


<!-- login-footer -->
<section>
    <div class="login-footer">

    </div>
</section>






</body>

<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>
</html>