<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="images/logo.png">
     <title>Scrapable</title>
<!-- CSS links -->
<link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/custom.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/color.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/responsive.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/owl.carousel.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/prettyPhoto.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/all.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('public/css/slick.css') ?>" rel="stylesheet">
<!-- Add other CSS links as needed -->
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
            <img src="images/bgimg/bg.jpg" alt="" style="width: 20%;">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100 img-aligns">
                        <div class="col-md-8 col-lg-7 col-xl-6 mb-3">
                            <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image"> -->
                            <img src="images/how its work/work.png" alt="">
                        </div>
                        <!-- Display success message if it exists -->
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
                        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                            <form class="login" id="Login" action="/loginform" method="POST">
                                <!-- Login form -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginEmail">OTP</label>
                                    <input type="tel" name="otp" id="otp" class="form-control form-control-lg" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Reset Password</button>
                            </form>


                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!--   JS Files Start  -->
<!-- JavaScript links -->
<script src="<?= base_url('public/js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('public/js/jquery-migrate-1.4.1.min.js') ?>"></script>
<script src="<?= base_url('public/js/popper.min.js') ?>"></script>
<script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('public/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('public/js/jquery.prettyPhoto.js') ?>"></script>
<script src="<?= base_url('public/js/isotope.min.js') ?>"></script>
<script src="<?= base_url('public/js/slick.min.js') ?>"></script>
<script src="<?= base_url('public/js/custom.js') ?>"></script>
<script src="<?= base_url('public/js/scroll.js') ?>"></script>
<!-- Add other JavaScript links as needed -->
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
                document.getElementById('Login').classList.remove('hidden');
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
                    alert('Password must be between 6 to 10 characters!');
                    return false; // prevent form submission
                }
                // If validation passes, you can proceed with form submission
            }
        </script>

</body>

</html>