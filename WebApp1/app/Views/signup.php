<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style1.css"/>
	<style>
body {
	color: #000000;
	background:  #f5f5f5;
	font-family: 'Roboto', sans-serif;
} 

.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
</style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    </div>
    </div>
</nav>
</header>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="https://lh5.googleusercontent.com/proxy/JGtnHr-_pKLZznL5wSNctPnRtpb1SlNXZ2pgf6vhmOvh5hv9dgfvPjmMsOy3ZRecyQNkUyZfcCsi4dUS4Ow7qK8x1uiO0rl8fIX_mmmP2ZuVyCYd6s5JMX5g8bw_iMuIgvU-pI98xj4kfHZY9MQH" width="72" heigh = "50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
    
   <center>
   <ul class="nav-list nav-list-right">
   <li class="nav-item active">
        <a class="nav-link " href="#"><B>Self Apprisal Registration </B><span class="sr-only">(current)</span></a>
      </li>
   </ul>
   </center>
    </ul>
    <ul class="nav-list nav-list-right">
        <li><a href="/">Login</a></li>
   </ul>
  </div>
</nav>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="success.php" method="">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mobile_number" class="col-md-4 col-form-label text-md-right">Mobile</label>
                                    <div class="col-md-6">
                                        <input type="text" id="moble_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanent_address" class="form-control" name="permanent-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="empid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">EMP_ID</abbr></label>
                                    <div class="col-md-6">
                                        <input type="text" id="nid_number" class="form-control" name="nid-number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cnf_password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="user_name" class="form-control" name="cnf_password">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                      <center> <button type="submit" class="btn btn-primary">
                                        Register
                                        </button></center> 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>