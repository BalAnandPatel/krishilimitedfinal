<?php include "include/headerr.php"; ?>
<div style="background: url('assets/images/backgrounds/Farmland.jpeg') no-repeat; background-size: cover;">
    <div class="container py-4 w-50">
        <form action="../admin/action/farmer_reg_post.php" method="post">
            <!-- Name input -->
            <div class="form-outline mb-4 form-floating">
                <input type="text" name="farmerName" class="form-control" required/>
                <label class="form-label" for="farmerName" class="form-label">Name</label>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12 col-xs-12">
                    <!-- Name input -->
                    <div class="form-outline mb-4 form-floating">
                        <input type="text" name="farmerMobile" class="form-control" required/>
                        <label class="form-label" for="farmerMob" class="form-label">Mobile No.</label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12 col-xs-12">
                    <!-- Name input -->
                    <div class="form-outline mb-4 form-floating">
                        <input type="text" name="farmerDistrict" class="form-control" required/>
                        <label class="form-label" for="farmerDist" class="form-label">District</label>
                    </div>
                </div>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <!-- <label class="form-label" for="farmerDesc" class="form-label">Message</label> -->
                <textarea class="form-control" name="farmerMsg" rows="4" placeholder="Message..." required></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>
    </div>
</div>

<?php include "include/footerr.php"; ?>