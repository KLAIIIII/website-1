<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

<div class="container shadow my-3 py-3">

    <div class="row justify-content-center mb-3">
        <div class="col-md-12">
            <div class="mx-auto" style="width: 22rem;">
                <img src="images/girl.png" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">

                <?php include("message.php"); ?>

                <div class="card-header text-center bg-warning text-white">
                    <h4>RIGISTER</h4>
                </div>

                <div class="card-body fs-5">
                    <form action="registercode.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="firstname" name="fname" required placeholder="Please enter your first name" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="lastname" name="lname" required placeholder="Please enter your last name" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" required placeholder="Please enter your email" class="form-control">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" required placeholder="Please enter your password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="cpassword" required placeholder="Please enter your confirm password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="register_btn" class="btn btn-warning">RIGISTER NOW</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>