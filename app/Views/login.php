<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="images/favicon.png">
    <title>ECO HTML</title>
    <!-- CSS FILES START -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/color.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/all.min.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <!-- CSS FILES End -->
    <style>
        body {
            background-color: #00e3ff14;
        }
    </style>
</head>

<body>
    <div class="wrapper home1">
        <!--Header Start-->
        <header class="header-style-1">
            <nav class="navbar navbar-expand-lg shadow-lg">
                <a class="logoo navbar-brand" href="/"><img src="/images/logo.png" class="logos" alt=""></a>
                <ul class="float-left topside-menu">
                    <li> <a class="con font-weight-bold" href="/login">Log in</a> </li>
                </ul>
            </nav>
        </header>
        <section class="vh-100">
            <img src="/images/bgimg/bg.jpg" alt="" style="width: 20%;">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <?php if (session()->has('success')) : ?>
                        <div class="alert alert-success">
                            <?= session('success') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Display error message if it exists -->
                    <?php if (session()->has('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>
                    <div class="row d-flex align-items-center justify-content-center h-100">
                        <div class="col-md-8 col-lg-7 col-xl-6 mb-3">
                            <img src="/images/how its work/work.png" alt="">
                        </div>
                        <!-- Display success message if it exists -->

                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <form class="login" id="Login" action="<?php echo base_url('login'); ?>" method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginEmail">Email address</label>
                                    <input type="email" required name="email" id="loginEmail" class="form-control form-control-lg" value="<?= old('email') ?>" />
                                    <?php if (isset($validation) && $validation->hasError('email')) : ?>
                                        <p class="text-danger"><?= $validation->getError('email') ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginPassword">Password</label>
                                    <input type="password" required name="password" id="loginPassword" class="form-control form-control-lg" />
                                    <?php if (isset($validation) && $validation->hasError('password')) : ?>
                                        <p class="text-danger"><?= $validation->getError('password') ?></p>
                                    <?php endif; ?>
                                </div>



                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                                <p class=" mt-3" style="text-align: center;">Don't have an Account?
                                    <a href="/register">Sign Up</a>
                                </p>
                                <div class="d-flex justify-content-around align-items-center mb-4">
                                    <a href="/forgot-password">Forgot password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!--   JS Files Start  -->
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/jquery-migrate-1.4.1.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/jquery.prettyPhoto.js"></script>
        <script src="/js/isotope.min.js"></script>
        <script src="/js/slick.min.js"></script>
        <script src="/js/custom.js"></script>
        <script src="/js/scroll.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 100,
                duration: 1000,
            });
        </script>
        <script>
            function showRegisterForm() {
                document.getElementById('Login').classList.add('hidden');
                document.getElementById('Registration').classList.remove('hidden');
            }

            function showLoginForm() {
                document.getElementById('Registration').classList.add('hidden');
                document.getElementById('Login').classList.remove('show');
            }
        </script>
        <script>
            document.getElementById('sendOtpButton').addEventListener('click', function() {
                var number = document.getElementById('registerNumber').value;
                var email = document.getElementById('registerEmail').value;

                // Validate mobile number
                if (number.length !== 10 || isNaN(number)) {
                    document.getElementById('numberError').style.display = 'block';
                    return; // Stop further execution
                } else {
                    document.getElementById('numberError').style.display = 'none';
                }

                // Validate email
                if (!validateEmail(email)) {
                    document.getElementById('emailError').style.display = 'block';
                    return; // Stop further execution
                } else {
                    document.getElementById('emailError').style.display = 'none';
                }

                // Show the OTP input field
                document.getElementById('otpInputField').style.display = 'block';

                // Hide the password input field
                document.getElementById('passwordInputField').style.display = 'block';

                // Hide the send OTP button
                this.style.display = 'none';

                // Show the register button
                document.getElementById('registerButton').style.display = 'block';

                // Disable input fields after sending OTP
                document.getElementById('registerNumber').disabled = true;
                document.getElementById('registerEmail').disabled = true;
            });

            function validateEmail(email) {
                var re = /\S+@\S+\.\S+/;
                return re.test(email);
            }

            function validatePassword() {
                var password = document.getElementById('registerPassword').value;
                if (password.length < 6 || password.length > 10) {
                    // alert('Password must be between 6 to 10 characters!');
                    return false; // prevent form submission
                }
                // If validation passes, you can proceed with form submission
            }
        </script>

</body>

</html>