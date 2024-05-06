<?php include(APPPATH . 'Views/components/header.php'); ?>
<!-- End header -->
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

<section class="container">
    <div class="row">
        <div class="col-md-12 margintop" data-aos="zoom-in-up">
            <div class="c-info text-center shadow-lg border border-warning backcolor" id="addressInfo">
                <i class="size_i3 fa-solid fas fa-map-marker-alt"></i>
                <?php if(isset($model)): ?>
                <h6 class="p-3"><?= $model['houseno']; ?> <?= $model['landmark']; ?> <?= $model['address']; ?></h6>
                <?php else: ?>
                    <h6 class="p-3">Add Your Address</h6>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="login" action="<?php echo base_url('useraddress'); ?>" method="POST">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="address1">House/Flat No</label>
                            <input type="text" name="houseno" id="houseno" class="form-control form-control-lg" value="<?= isset($model) ? $model['houseno'] : ''; ?>" />
                            <?php if(isset($validation) && $validation->hasError('houseno')): ?>
                                <p class="text-danger"><?= $validation->getError('houseno') ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="landmark">Landmark</label>
                            <input type="text" name="landmark" id="landmark" class="form-control form-control-lg" value="<?= isset($model) ? $model['landmark'] : ''; ?>" />
                            <?php if(isset($validation) && $validation->hasError('landmark')): ?>
                                <p class="text-danger"><?= $validation->getError('landmark') ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" required id="address" required name="address" class="form-control form-control-lg" value="<?= isset($model) ? $model['address'] : ''; ?>" />
                    <?php if(isset($validation) && $validation->hasError('address')): ?>
                        <p class="text-danger"><?= $validation->getError('address') ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php include(APPPATH . 'Views/components/footer.php'); ?>
