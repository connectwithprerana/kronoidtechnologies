<!DOCTYPE html>
<html lang="en">
<?php include_once '../conn.php'; ?>
<?php
    $smartclass='';
    if(isset($_GET['sc']) && $_GET['sc']!=''){
        $smartclass=$_GET['sc'];
        if(isset($_COOKIE['register_hash'])){
            $id_hash=$_COOKIE['register_hash'];
            mysqli_query($conn,"INSERT INTO enquiries SET user_hash='$id_hash',sc='$smartclass',status=1");
            ?>
            <script>
                window.location.href="<?php echo base_url(); ?>";
            </script>
            <?php
            die();
        }
    }
    if(isset($_POST['register_me'])){
        $first_name=ucwords(strtolower($_POST['first_name']));
        $last_name=ucwords(strtolower($_POST['last_name']));
        $email=$_POST['email'];
        $username=$_POST['username'];
        $query="SELECT * FROM users WHERE username='$username'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            
            foreach($_POST as $key => $val){
                $_SESSION[''.$key.'']=$val;
            }
            $_SESSION['action_type']="error";
            $_SESSION['action_outcome']="An account already exists with this username, please try another username.";
            $_SESSION['error_username']=true;
            $row=mysqli_fetch_array($result);
            $id_hash=md5($row['id']);
            $smartclass=$_POST['sc'];
            mysqli_query($conn,"INSERT INTO enquiries SET user_hash='$id_hash',sc='$smartclass',status=1");
            ?>
            <script>
                window.location.href="<?php echo base_url().'user/register.php'; ?>";
            </script>
            <?php
            die();
        }
        $password=$_POST['password'];
        
        $query="SELECT * FROM users WHERE email='$email' AND status=1";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            $_SESSION['action_type']="error";
            $_SESSION['action_outcome']="An account already exists with this email, please try login or recover account options.";
            $row=mysqli_fetch_array($result);
            $id_hash=md5($row['id']);
            $smartclass=$_POST['sc'];
            mysqli_query($conn,"INSERT INTO enquiries SET user_hash='$id_hash',sc='$smartclass',status=1");
            ?>
            <script>
                window.location.href="<?php echo base_url().'user/login.php'; ?>";
            </script>
            <?php
            die();
        }
        else{
            $query="SELECT * FROM users WHERE email='$email' AND status=0";
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_array($result);
                $userid=$row['id'];
                $id_hash=md5($row['id']);
                $smartclass=$_POST['sc'];
                mysqli_query($conn,"INSERT INTO enquiries SET user_hash='$id_hash',sc='$smartclass',status=1");
                setcookie('register_hash', md5($userid), time() + (86400 * 30), "/");
                ?>
                <script>
                    window.location.href='setup.php?first_time=true';
                </script>
                <?php
            }
            else{
                $query="INSERT INTO users SET first_name='$first_name',last_name='$last_name',email='$email',username='$username',password='".md5($password)."',status=1";
                $result=mysqli_query($conn,$query);
                if($result){
                $id_hash=md5(mysqli_insert_id($conn));
                $smartclass=$_POST['sc'];
                mysqli_query($conn,"INSERT INTO enquiries SET user_hash='$id_hash',sc='$smartclass',status=1");
                    $_SESSION['action_type']="success";
                    $_SESSION['action_outcome']="Account Created! Please Verify your email for accessing your account.Verification link has been sent to your registered email.";
                    ?>
                    <script>
                        window.location.href="<?php echo base_url().'thankyou.php'; ?>";
                    </script>
                    <?php
                    die();
                }
            }
        }
    }
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register || Smart Classess</title>
  <meta name="og:title" property="og:title" content="SMART CLASSES :: World's best learning experience is here.In Association with THE-LIBRARY & W3STUDY.">
<meta name="title" property="title" content="SMART CLASSES :: World's best learning experience is here.In Association with THE-LIBRARY & W3STUDY.">
<meta name="og:description" property="og:description" content="World's best learning experience is here. Get started today connect at connect@smartclassess.com">
<meta name="og:image" property="og:image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
<meta name="image" property="image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
<meta name="description" property="description" content="World's best learning experience is here. Get started today connect at connect@smartclassess.com">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
          rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
<?php include_once '../navbar.php'; ?>
  <main>
      
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7 col-md-6 d-flex flex-column align-items-left justify-content-center d-none d-md-block">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                        <p class="text-center small">Enter your personal details to create account</p>
                        <img style="margin-top:55px;" class="img-fluid" src="https://i.pinimg.com/originals/82/24/ab/8224abec3e56c8893048d91d79827142.png">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 d-flex flex-column align-items-right justify-content-center">

              <div class="d-flex justify-content-center py-4 ">
                <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Smart Classess</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body pt-4">

                  <form class="row g-3 needs-validation" novalidate action="" method="post">
                      <input type="hidden" name="smartclass" id="smartclass" value="<?php echo $smartclass; ?>">
                    <div class="col-6">
                      <label for="first_name" class="form-label">First Name</label>
                      <input type="text" value="<?php if(isset($_SESSION['first_name'])){ echo $_SESSION['first_name']; } ?>" name="first_name" class="form-control" id="first_name" placeholder="e.g Abdul" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>
                    <div class="col-6">
                      <label for="last_name" class="form-label">Last Name</label>
                      <input type="text" value="<?php if(isset($_SESSION['last_name'])){ echo $_SESSION['last_name']; } ?>" name="last_name" placeholder="e.g Kalam" class="form-control" id="last_name" required>
                      <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?>" placeholder="e.g master.of.rocketscience@physics.world" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" value="<?php if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>" name="username" placeholder="wingsoffire" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="accepts" checked id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="register_me" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="<?php echo base_url(); ?>user/login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits" style="text-align:center !important;width:100%;">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>