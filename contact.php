<?php include("./css/myTheme/header.php"); ?>
<div class="container">
    <div class="row">
        <h1>Get in Touch</h1>
        <div class="col-12">
            <form>
                <div class="form-group">
                    <!-- User Name -->
                    <label for="username">Name :</label>
                    <input type="text" class="form-control" id="username" placeholder="Hritvik Sikarwar">
                </div>
                <!-- Email -->
                <div class="form-group">
                    <label for="useremail">Email address :</label>
                    <input type="email" class="form-control" id="useremail" placeholder="hritvik76@gmail.com">
                </div>
                <!-- Contact Number -->
                <div class="form-group">
                    <label for="usernumber">Contact Number :</label>
                    <input type="number" class="form-control" id="usernumber" placeholder="1234567890">
                </div>
                <!-- Requirement -->
                <div class="form-group">
                    <label for="">Requirement :</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Development(WEB/APP).
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        Degital Marketing/SEO
                    </label>
                </div>
                </div>
                <!-- Overview -->
                <div class="form-group">
                    <label for="usernumber">Quick Overview (Project) :</label>
                    <textarea class="form-control" id="usernumber" rows="3" placeholder="I want a Website for my Business"></textarea>
                </div>
                <!-- Buttons -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" href="">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("./css/myTheme/footer.php"); ?>