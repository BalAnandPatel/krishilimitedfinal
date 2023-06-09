<?php include "include/headerr.php"; ?>
<div style="background: url('assets/images/backgrounds/Farmland.jpeg') no-repeat; background-size: cover;">
    <div class="container py-4 w-50">
        <form>
            <!-- Name input -->
            <div class="form-outline mb-4 form-floating">
                <input type="text" id="farmerName" class="form-control" />
                <label class="form-label" for="farmerName" class="form-label">Name</label>
            </div>

            <div class="row g-5">
                <div class="col">
                    <!-- Name input -->
                    <div class="form-outline mb-4 form-floating">
                        <input type="text" id="farmerMob" class="form-control" />
                        <label class="form-label" for="farmerMob" class="form-label">Mobile No.</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Name input -->
                    <div class="form-outline mb-4 form-floating">
                        <input type="text" id="farmerDist" class="form-control" />
                        <label class="form-label" for="farmerDist" class="form-label">District</label>
                    </div>
                </div>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <!-- <label class="form-label" for="farmerDesc" class="form-label">Message</label> -->
                <textarea class="form-control" id="farmerDesc" rows="4" placeholder="Message..."></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>
    </div>
</div>

<?php include "include/footerr.php"; ?>