<?=$this->extend('layouts/default')?>
<?=$this->section('content')?>
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="index.html" class="">
                                            <img src="assets/images/logo-dark.png" alt="" height="50" class="auth-logo logo-dark mx-auto">
                                            <img src="assets/images/logo-light.png" alt="" height="50" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                    <!-- end row -->
                                    <h4 class="font-size-18 text-muted mt-2 text-center">Welcome Back !</h4>
                                    <form class="form-horizontal" id="login_form">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="email">Email</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Enter email">
                                                    <!-- <div class="error-feedback">
                                                            Please enter the Email Address
                                                    </div> -->
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                                                    <!-- <div class="error-feedback">
                                                            Please enter the Password
                                                    </div> -->
                                                </div>

                                                <div class="row">
                                                    <div class="col-7 d-none">
                                                        <div class="text-md-end mt-3 mt-md-0">
                                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid">
                                                <!-- <div class="error-feedback" style="font-size:14px;text-align:center;" id="login_error">
                                                            Please enter proper Credentials
                                                </div> -->
                                                    <button class="btn btn-primary waves-effect waves-light" id="login" type="button">Log In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center d-none">
                            <p class="text-white-50">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Register </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Upzet. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>

<?=$this->endSection()?>