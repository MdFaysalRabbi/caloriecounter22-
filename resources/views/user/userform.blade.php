<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{'assets/user/'}}vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{'assets/user/'}}vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{'assets/user/'}}css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{'assets/user/'}}css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{'assets/user/img/images'}}css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{'assets/user/'}}img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="login-page">
    <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
            <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                            <div class="logo">
                                <h1>Dashboard</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form class="" action="/us" method="post">

                                @csrf
                                <div class="form-group-material">

                                    <input id="name" type="text" name="name" PLACEHOLDER="User name" required data-msg="Please enter your username" class="input-material">
                                    <label for="register-username" class="label-material"></label>
                                </div>
                                <div class="form-group-material">
                                    <input id="email" type="text" name="email" PLACEHOLDER="Email" required data-msg="Please enter a valid email address" class="input-material">
                                    <label for="register-email" class="label-material">     </label>
                                </div>
                                <div class="form-group-material">
                                    <input id="password" type="text" name="password" PLACEHOLDER="Password"required data-msg="Please enter your password" class="input-material">
                                    <label for="password" class="label-material">        </label>
                                </div>

                                <div class="line"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">gender</label>
                                    <div class="col-sm-9">
                                        <select name="gender" class="form-control mb-3 mb-3">
                                            <option >Select One</option>
                                            <option value="male">male</option>
                                            <option value="female">female</option>

                                        </select>
                                    </div>

                                </div>



                                <div class="form-group terms-conditions text-center">
                                    <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                                    <label for="register-agree">I agree with the terms and policy</label>
                                </div>
                                <div class="form-group text-center">
                                    <input id="register" type="submit" value="Register" class="btn btn-primary">
                                </div>
                            </form><small>Already have an account? </small><a href="login.blade.php" class="signup">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights text-center">
        <p >2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
    </div>
</div>
<!-- JavaScript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="js/front.js"></script>
</body>
</html>

