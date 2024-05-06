<?php include(APPPATH . 'Views/components/header.php'); ?>

        <div class="row text-center">
            <div class="col">
                <h5 class="margintop mx-auto">Your Profile</h5>
            </div>
        </div>

    
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="<?php echo base_url('updateuser'); ?>" method="POST" enctype="multipart/form-data">
                    <?php
                         $img = !empty($user['image']) ? base_url('uploads/profile_pics/' . $user['image']) : base_url('placeholder.jpg');
                    ?>
                    <div class="form-group text-center">
                        <label for="profilePicInput" style="cursor: pointer;">
                            <img src="<?php echo $img ?>" alt="Profile Picture" class="img-thumbnail" id="profilePicPreview">
                            <i class="fas fa-edit"></i> Change Picture
                        </label>

                        <!-- Hidden input field -->
                        <input type="file" class="form-control-file" id="profilePicInput" name="profilePic" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Enter your name" value="<?= $user['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-lg" readonly name="email" id="email" placeholder="Enter your email" value="<?= $user['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="tel" class="form-control form-control-lg" readonly name="contact" id="mobile" placeholder="Enter your mobile number" value="<?= $user['contact'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                </form>
            </div>
        </div>
    </section>

    <?php include(APPPATH . 'Views/components/footer.php'); ?>