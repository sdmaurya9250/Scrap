<?php include(APPPATH . 'Views/components/header.php'); ?>
    <section class="vh-100">
        <img src="images/bgimg/bg.jpg" alt="" style="width: 20%;">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6 mb-3">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image"> -->
                            <img src="images/how its work/work.png" alt="">
                    </div>
<!-- Display success message if it exists -->
<?php if(session()->has('success')): ?>
    <div class="alert alert-success">
        <?= session('success') ?>
    </div>
<?php endif; ?>

<!-- Display error message if it exists -->
<?php if(session()->has('error')): ?>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/scroll.js"></script>
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