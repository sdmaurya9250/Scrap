<?php include(APPPATH . 'Views/components/header.php'); ?>
    <div class="row text-center">
            <div class="col mt-1">
                <h3 class="margintop mx-auto">Schedule Pickup</h3>
            </div>
        </div>
    
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form class="login" id="Login" action="<?php echo base_url('supports'); ?>" method="POST">
                        <div class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                                <input type="text" required id="name" name="name" class="form-control form-control-lg" />
                              
                                    <?php if(isset($validation) && $validation->hasError('name')): ?>
                                <p class="text-danger"><?= $validation->getError('name') ?></p>
                            <?php endif; ?>
                            </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                                <input type="text"  required id="email" name="email" class="form-control form-control-lg" />
                              
                                    <?php if(isset($validation) && $validation->hasError('email')): ?>
                                <p class="text-danger"><?= $validation->getError('email') ?></p>
                            <?php endif; ?>
                            </div>
                        
                            <div class="form-outline mb-4">
                            <label class="form-label" for="contact">Mobile Number</label>
                                <input type="tel" required id="contact" name="contact" class="form-control form-control-lg" />
                              
                                <?php if(isset($validation) && $validation->hasError('contact')): ?>
                                <p class="text-danger"><?= $validation->getError('contact') ?></p>
                            <?php endif; ?>
                            </div>
                        
                            <div class="form-outline mb-4" id="otpInputField" >
                            <label class="form-label" for="otp">Message</label><br>
                                <!-- <input type="text" id="otp" name="otp" class="form-control form-control-lg" /> -->
                                <textarea name="message" required id="message"  class="form-control form-control-lg"></textarea><br>
                                <?php if(isset($validation) && $validation->hasError('message')): ?>
                                <p class="text-danger"><?= $validation->getError('message') ?></p>
                            <?php endif; ?>
                            </div>
                        

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Support</button>
                         
                        </form>
            </div>
        </div>
    </section>

    <?php include(APPPATH . 'Views/components/footer.php'); ?>